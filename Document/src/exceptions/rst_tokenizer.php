<?php
/**
 * Base exception for the Document package.
 *
 * @package Document
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Exception thrown, when the RST tokenizer could not tokenize a character
 * sequence.
 *
 * @package Document
 * @version //autogentag//
 */
class ezcDocumentRstTokenizerException extends ezcDocumentException
{
    /**
     * Construct exception from errnous string and current position
     * 
     * @param int $line 
     * @param int $position 
     * @param string $string 
     * @return void
     */
    public function __construct( $line, $position, $string )
    {
        parent::__construct( 
            "Could not tokenize string at line {$line} char {$position}: '" . substr( $string, 0, 10 ) . "'."
        );
    }
}

?>
