<?php
/**
 * File containing the ezcDbSchemaSqliteReader class.
 *
 * @package DatabaseSchema
 * @version //autogentag//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Handler for SQLite connections representing a DB schema.
 *
 * @package DatabaseSchema
 * @version //autogentag//
 */
class ezcDbSchemaSqliteReader implements ezcDbSchemaDbReader
{
    /**
     * Contains a type map from SQLite native types to generic DbSchema types.
     *
     * @var array
     */
    static private $typeMap = array(
        'integer' => 'integer',
        'real' => 'float',
        'text' => 'text',
        'blob' => 'blob',
        'clob' => 'clob',
        'boolean' => 'boolean',
        'numeric' => 'decimal',
        'date' => 'date',
        'datetime' => 'timestamp',
        'timestamp' => 'timestamp'
    );
            
            
    /**
     * Returns what type of schema reader this class implements.
     *
     * This method always returns ezcDbSchema::DATABASE
     *
     * @return int
     */
    public function getReaderType()
    {
        return ezcDbSchema::DATABASE;
    }

    /**
     * Returns a ezcDbSchema object from the database that is referenced with $db.
     *
     * @param ezcDbHandler $db
     * @return ezcDbSchema
     */
    public function loadFromDb( ezcDbHandler $db )
    {
        $this->db = $db;
        return new ezcDbSchema( $this->fetchSchema() );
    }

    /**
     * Loops over all the tables in the database and extracts schema information.
     *
     * This method extracts information about a database's schema from the
     * database itself and returns this schema as an ezcDbSchema object.
     *
     * @return ezcDbSchema
     */
    private function fetchSchema()
    {
        $schemaDefinition = array();

        $tables = $this->db->query( "SELECT name FROM sqlite_master WHERE type='table' AND name != 'sqlite_sequence' ORDER BY name" )->fetchAll();
        array_walk( $tables, create_function( '&$item,$key', '$item = $item[0];' ) );

        foreach ( $tables as $tableName )
        {
            $fields  = $this->fetchTableFields( $tableName );
            $indexes = $this->fetchTableIndexes( $tableName );

            $schemaDefinition[$tableName] = new ezcDbSchemaTable( $fields, $indexes );
        }

        return $schemaDefinition;
    }

    /**
     * Fetch fields definition for the table $tableName
     *
     * This method loops over all the fields in the table $tableName and
     * returns an array with the field specification. The key in the returned
     * array is the name of the field.
     *
     * @param string $tableName
     * @return array(string=>ezcDbSchemaField)
     */
    private function fetchTableFields( $tableName )
    {
        $fields = array();

        $resultArray = $this->db->query( "PRAGMA TABLE_INFO( $tableName )" );
        $resultArray->setFetchMode( PDO::FETCH_NUM );

        foreach ( $resultArray as $row )
        {
            $fieldLength = false;
            $fieldPrecision = null;
            $fieldType = self::convertToGenericType( $row[2], $fieldLength, $fieldPrecision );

            $fieldNotNull = false;
            if ( $row[3] == '99' )
            {
                $fieldNotNull = true;
            }

            $fieldDefault = null;
            if ( $row[4] != '' )
            {
                $fieldDefault = $row[4];
            }

            $fieldAutoIncrement = false;

            if ( $row[5] =='1' )
            {
                $fieldAutoIncrement = true;
            }

            // FIXME: unsigned needs to be implemented
            $fieldUnsigned = false;

            $fields[$row[1]] = new ezcDbSchemaField( $fieldType, $fieldLength, $fieldNotNull, $fieldDefault, $fieldAutoIncrement, $fieldUnsigned );
        }

        return $fields;
    }

    /**
     * Converts the native SQLite type in $typeString to a generic DbSchema type.
     *
     * This method converts a string like "float(5,10)" to the generic DbSchema
     * type and uses the by-reference parameters $typeLength and $typePrecision
     * to communicate the optional length and precision of the field's type.
     *
     * @param string  $typeString
     * @param int    &$typeLength
     * @param int    &$typePrecision
     * @return string
     */
    static function convertToGenericType( $typeString, &$typeLength, &$typePrecision )
    {
        preg_match( "@([a-z ]*)(\((\d*)(,(\d+))?\))?@", $typeString, $matches );
        $genericType = self::$typeMap[$matches[1]];

        if ( in_array( $genericType, array( 'text', 'decimal', 'float' ) ) && isset( $matches[3] ) )
        {
            $typeLength = $matches[3];
            if ( is_numeric( $typeLength ) )
            {
                $typeLength = (int) $typeLength;
            }
        }
        if ( in_array( $genericType, array( 'decimal', 'float' ) ) && isset( $matches[5] ) )
        {
            $typePrecision = $matches[5];
        }

        return $genericType;
    }

    /**
     * Returns whether the type $type is a numeric type
     *
     * @return bool
     */
    private function isNumericType( $type )
    {
        $types = array( 'real', 'integer' );
        return in_array( $type, $types );
    }

    /**
     * Returns whether the type $type is a string type
     *
     * @return bool
     */
    private function isStringType( $type )
    {
        $types = array( 'text' );
        return in_array( $type, $types );
    }

    /**
     * Returns whether the type $type is a blob type
     *
     * @return bool
     */
    private function isBlobType( $type )
    {
        $types = array( 'blob' );
        return in_array( $type, $types );
    }


    /**
     * Loops over all the indexes in the table $table and extracts information.
     *
     * This method extracts information about the table $tableName's indexes
     * from the database and returns this schema as an array of
     * ezcDbSchemaIndex objects. The key in the array is the index' name.
     *
     * @param  string
     * @return array(string=>ezcDbSchemaIndex)
     */
    private function fetchTableIndexes( $tableName )
    {
        $indexBuffer = array();

        $indexNamesArray = $this->db->query( "PRAGMA INDEX_LIST ($tableName)" );

        $primaryFound = false;

        foreach ( $indexNamesArray as $row )
        {
            $keyName = $row['1'];
            if ( $keyName == $tableName.'_pri' ) 
            {
                $keyName = 'primary';
                $indexBuffer[$keyName]['primary'] = true;
                $indexBuffer[$keyName]['unique'] = true;
                $primaryFound = true;
            }
            else
            {
                $indexBuffer[$keyName]['primary'] = false;
                $indexBuffer[$keyName]['unique'] = $row[2]?true:false;
            }

            $indexArray = $this->db->query( "PRAGMA INDEX_INFO ({$row[1]})" );

            foreach ( $indexArray as $indexColumnRow )
            {
                $indexBuffer[$keyName]['fields'][$indexColumnRow[2]] = new ezcDbSchemaIndexField();
            }
        }

        // search primary index
        $fieldArray = $this->db->query( "PRAGMA TABLE_INFO ($tableName)" );
        foreach ( $fieldArray as $row )
        {
            if ( $row[5] == '1' ) 
            {
                $keyName = 'primary';
                $indexBuffer[$keyName]['primary'] = true;
                $indexBuffer[$keyName]['unique'] = true;
                $indexBuffer[$keyName]['fields'][$row[1]] = new ezcDbSchemaIndexField();
            }
        }

        $indexes = array();

        foreach ( $indexBuffer as $indexName => $indexInfo )
        {
            $indexes[$indexName] = new ezcDbSchemaIndex( $indexInfo['fields'], $indexInfo['primary'], $indexInfo['unique'] );
        }

        return $indexes;
    }

}
?>
