<?php
/**
 * File containing the abstract ezcDocumentParser class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * A base class for document parsers
 * 
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
abstract class ezcDocumentParser
{
    /**
     * XML document base options.
     * 
     * @var ezcDocumentParserBaseOptions
     */
    protected $options;

    /**
     * Additional parser properties.
     * 
     * @var array
     */
    protected $properties = array(
        'errors' => array(),
    );

    /**
     * Notice error level
     */
    const NOTICE  = 1;

    /**
     * Error level for warnings.
     */
    const WARNING = 2;

    /**
     * Error level for severe errors.
     */
    const ERROR   = 4;

    /**
     * Error level for fatal errors
     */
    const FATAL   = 8;

    /**
     * Construct new document
     *
     * @param ezcFooBarOptions $options
     */
    public function __construct( ezcDocumentParserBaseOptions $options = null )
    {
        $this->options = ( $options === null ?
            new ezcDocumentParserBaseOptions() :
            $options );
    }

    /**
     * Trigger parser error
     *
     * Emit a parser error and handle it dependiing on the current error
     * reporting settings.
     * 
     * @param int $level 
     * @param string $message 
     * @param string $file 
     * @param int $line 
     * @param int $position 
     * @return void
     */
    protected function triggerError( $level, $message, $file, $line = null, $position = null )
    {
        if ( $level >= $this->options->errorReporting )
        {
            throw new ezcDocumentParserException( $level, $message, $file, $line, $position );
        }

        // For lower error level settings, just aggregate errors
        $this->properties['errors'][] = array(
            'level'    => $level,
            'message'  => $message,
            'file'     => $file,
            'line'     => $line,
            'position' => $position,
        );
    }

    /**
     * Returns the value of the property $name.
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the property $name does not exist
     * @param string $name
     * @ignore
     */
    public function __get( $name )
    {
        switch ( $name )
        {
            case 'options':
                return $this->options;
            case 'errors':
                return $this->properties['errors'];
        }

        throw new ezcBasePropertyNotFoundException( $name );
    }

    /**
     * Sets the property $name to $value.
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the property $name does not exist
     * @throws ezcBaseValueException
     *         if $value is not accepted for the property $name
     * @param string $name
     * @param mixed $value
     * @ignore
     */
    public function __set( $name, $value )
    {
        switch ( $name )
        {
            case 'options':
                if ( !( $value instanceof ezcDocumentParserBaseOptions ) )
                {
                    throw new ezcBaseValueException( 'options', $value, 'instanceof ezcDocumentParserBaseOptions' );
                }

                $this->options = $value;
                break;

            case 'errors':
                throw new ezcBasePropertyPermissionException( $name, ezcBasePropertyPermissionException::READ );

            default:
                throw new ezcBasePropertyNotFoundException( $name );
        }
    }

    /**
     * Returns true if the property $name is set, otherwise false.
     *
     * @param string $name
     * @return bool
     * @ignore
     */
    public function __isset( $name )
    {
        switch ( $name )
        {
            case 'options':
                return true;

            default:
                return false;
        }
    }
}

?>
