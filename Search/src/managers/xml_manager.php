<?php
/**
 * File containing the ezcSearchXmlManager class
 *
 * @package Search
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Handles document type definitions in XML format.
 *
 * Each definition must be in a separate file in the directory specified to the
 * constructor. The filename must be the same as the lowercase name of the
 * document type with .xml appended. Each file should return the definition of
 * one document type.
 *
 * Example exampleclass.xml:
 * <code>
 * <?xml version="1.0" charset="utf-8"?>
 * <document>
 *   <field type="id">id</field>
 *   <field type="string" boost="2">title</field>
 *   <field type="text">description</field>
 * </document>
 * </code>
 *
 * @version //autogen//
 * @package Search
 */
class ezcSearchXmlManager implements ezcSearchDefinitionManager
{
    /**
     * Holds the path to the directory where the definitions are stored.
     *
     * @var string
     */
    private $dir;

    /**
     * Holds the search document definitions that are currently cached.
     *
     * @var array(string=>ezcSearchDocumentDefinition)
     */
    private $cache = array();

    private $typeMap = array(
        'id' => ezcSearchDocumentDefinition::STRING,
        'string' => ezcSearchDocumentDefinition::STRING,
        'text' => ezcSearchDocumentDefinition::TEXT,
        'html' => ezcSearchDocumentDefinition::HTML,
        'date' => ezcSearchDocumentDefinition::DATE,
    );

    /**
     * Constructs a new XML manager that will look for search document definitions in the directory $dir.
     *
     * @param string $dir
     */
    public function __construct( $dir )
    {
        // append trailing / to $dir if it does not exist.
        if ( substr( $dir, -1 ) != DIRECTORY_SEPARATOR )
        {
            $dir .= DIRECTORY_SEPARATOR;
        }
        $this->dir = $dir;
    }

    private function parseDefinitionXml( $documentType, $path, SimpleXMLElement $s )
    {
        $def = new ezcSearchDocumentDefinition;

        foreach ( $s->field as $field )
        {
            if ( $field['type'] == 'id' )
            {
                if ( $def->idProperty !== null )
                {
                    throw new ezcSearchDefinitionInvalidException( 'XML', $documentType, $path, 'Duplicate ID property' );
                }
                $def->idProperty = (string) $field;
            }
            $type = (string) $field['type'];
            if ( !isset( $this->typeMap[$type] ) )
            {
                throw new ezcSearchDefinitionInvalidException( 'XML', $documentType, $path, "Unknown type: {$type}" );
            }
            $type = $this->typeMap[$type];
            $fields[(string) $field] = new ezcSearchDefinitionDocumentField( (string) $field, $type, (float) $field['boost'] );
        }
        $def->fields = $fields;

        return $def;
    }

    /**
     * Returns the definition of the search document with the type $type.
     *
     * @throws ezcSearchDefinitionNotFoundException if no such definition can be found.
     * @throws ezcSearchDefinitionMissingIdPropertyException
     *         if the definition does not have an "idProperty" attribute.
     * @param string $type
     * @return ezcSearchDocumentDefinition
     */
    public function fetchDefinition( $type )
    {
        // check the cache
        if ( isset( $this->cache[$type] ) )
        {
            return $this->cache[$type];
        }

        // load definition
        $definition = null;
        $path = $this->dir . strtolower( $type ) . '.xml';
        if ( !file_exists( $path ) )
        {
            throw new ezcSearchDefinitionNotFoundException( 'XML', $type, $path );
        }

        $definition = simplexml_load_file( $path, null, LIBXML_NOWARNING | LIBXML_NOERROR );
        if ( !( $definition instanceof SimpleXMLElement ) )
        {
            throw new ezcSearchDefinitionInvalidException( 'XML', $type, $path, 'Invalid XML' );
        }

        $definition = self::parseDefinitionXml( $type, $path, $definition );

        if ( $definition->idProperty === null )
        {
            throw new ezcSearchDefinitionInvalidException( 'XML', $type, $path, 'Missing ID property' );
        }

        // store in cache
        $this->cache[$type] = $definition;

        // return
        return $definition;
    }
}

?>
