<?php

/**
 * Interface for ezcConsoleDialog validator classes. 
 * 
 * @package ConsoleTools
 * @version //autogen//
 * @copyright Copyright (C) 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
interface ezcConsoleDialogValidator
{
    /**
     * Returns if the given result is valid. 
     * 
     * @param mixed $result The received result.
     * @return bool If the result is valid.
     */
    public function validate( $result );

    /**
     * Returns a fixed version of the result, if possible.
     * This method tries to repair the submitted result, if it is not valid,
     * yet. Fixing can be done in different ways, like casting into a certain
     * datatype, string manipulation, creating an object. A result returned
     * by fixup must not necessarily be valid, so a dialog should call validate
     * after trying to fix the result.
     * 
     * @param mixed $result The received result.
     * @return mixed The manipulated result.
     */
    public function fixup( $result );

}

?>
