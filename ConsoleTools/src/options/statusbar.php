<?php
/**
 * File containing the ezcConsoleStatusbarOptions class.
 *
 * @package ConsoleTools
 * @version //autogentag//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @filesource
 */

/**
 * Struct class to store the options of the ezcConsoleOutput class.
 * This class stores the options for the {@link ezcConsoleOutput} class.
 *
 * The ezcConsoleStatusbarOptions class has the following properties:
 * - <b>successChar</b> <i>string</i>, The character to display for a succeeded action.
 * - <b>failureChar</b> <i>string</i>, The character to display for a failed action.
 * 
 * @package ConsoleTools
 * @version //autogen//
 */
class ezcConsoleStatusbarOptions extends ezcBaseOptions
{

    /**
     * The char shown for a succeded status. 
     * 
     * @var string
     */
    private $successChar = "+";

    /**
     * The char shown for a failed status. 
     * 
     * @var string
     */
    private $failureChar = "-";

    /**
     * Option write access.
     * 
     * @throws ezcBasePropertyNotFoundException
     *         If a desired property could not be found.
     * @throws ezcBaseSettingValueException
     *         If a desired property value is out of range.
     *
     * @param string $key Name of the property.
     * @param mixed $value  The value for the property.
     * @return void
     */
    public function __set( $key, $value )
    {
        switch ( $key )
        {
            case "successChar":
            case "failureChar":
                if ( strlen( $value ) < 1 )
                {
                    throw new ezcBaseSettingValueException( $key, $value, 'string, not empty' );
                }
                break;
            default:
                throw new ezcBaseSettingNotFoundException( $key );
        }
        $this->$key = $value;
    }
}

?>
