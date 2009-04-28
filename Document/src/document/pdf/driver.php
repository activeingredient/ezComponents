<?php
/**
 * File containing the ezcDocumentPdfDriver class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * Abstract base class for driver implementations.
 *
 * Driver implement the actual creation of PDF documents. They offer a simple
 * unified API for PDF creation and proxy them to the actual PDF
 * implementation, which will create the binary data.
 *
 * The unit used for all values passed to methods of this class is milimeters.
 * The extending drivers need to transform these values in a representation
 * they can use.
 *
 * @package Document
 * @access private
 * @version //autogen//
 */
abstract class ezcDocumentPdfDriver
{
    /**
     * Normal text
     */
    const FONT_PLAIN     = 0;

    /**
     * Bold text
     */
    const FONT_BOLD      = 1;

    /**
     * Italic text
     */
    const FONT_OBLIQUE   = 2;

    /**
     * Underlined text
     */
    const FONT_UNDERLINE = 4;

    /**
     * Create a new page
     *
     * Create a new page in the PDF document with the given width and height.
     * 
     * @param float $width 
     * @param float $height 
     * @return void
     */
    abstract public function createPage( $width, $height );

    /**
     * Set text formatting option
     *
     * Set a text formatting option. The names of the options are the same used
     * in the PCSS files and need to be translated by the driver to the proper
     * backend calls.
     *
     *
     * @param string $type 
     * @param mixed $value 
     * @return void
     */
    abstract public function setTextFormatting( $type, $value );

    /**
     * Calculate the rendered width of the current word
     *
     * Calculate the width of the passed word, using the currently set text
     * formatting options.
     * 
     * @param string $word 
     * @return float
     */
    abstract public function calculateWordWidth( $word );

    /**
     * Get current line height
     *
     * Return the current line height in millimeter based on the current font
     * and text rendering settings.
     * 
     * @return float
     */
    abstract public function getCurrentLineHeight();

    /**
     * Draw word at given position
     *
     * Draw the given word at the given position using the currently set text
     * formatting options.
     * 
     * @param float $x 
     * @param float $y 
     * @param string $word 
     * @return void
     */
    abstract public function drawWord( $x, $y, $word );

    /**
     * Draw rectangle
     *
     * Draw rectangle of specified dimensions in specified color. The last
     * parameter defined, if only an outline should be renderer, or if a filled
     * rectangle should be rendered.
     *
       @TODO: Requires proper color specification
       @TODO: Requires border width specification
     * 
     * @param float $x 
     * @param float $y 
     * @param float $width 
     * @param float $height 
     * @param mixed $color 
     * @param bool $filled 
     * @return void
     */
    abstract public function drawRectangle( $x, $y, $width, $height, $color, $filled = true );

    /**
     * Generate and return PDF
     *
     * Return the generated binary PDF content as a string.
     * 
     * @return string
     */
    abstract public function save();
}
?>
