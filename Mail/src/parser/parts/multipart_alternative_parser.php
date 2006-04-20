<?php
/**
 * File containing the ezcMailMultipartAlternativeParser class
 *
 * @package Mail
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Parses multipart/mixed mail parts.
 *
 * @package Mail
 * @version //autogen//
 * @access private
 */
class ezcMailMultipartAlternativeParser extends ezcMailMultipartParser
{
    /**
     * Holds the ezcMailMultipartAlternative part corresponding to the data parsed with this parser.
     *
     * @var ezcMailMultipartAlternative
     */
    private $part = null;

    /**
     * Constructs a new ezcMailMultipartAlternativeParser.
     */
    public function __construct( ezcMailHeadersHolder $headers )
    {
        parent::__construct( $headers );
        $this->part = new ezcMailMultipartAlternative();
    }

    /**
     * Adds the part $part to the list of multipart messages.
     *
     * This method is called automatically by ezcMailMultipartParser
     * each time a part is parsed.
     *
     * @param ezcMailPart $part
     * @return void
     */
    public function partDone( ezcMailPart $part )
    {
        $this->part->appendPart( $part );
    }

    /**
     * Returns the parts parsed for this multipart.
     *
     * @return ezcMailMultipartAlternative
     */
    public function finishMultipart()
    {
        return $this->part;
    }
}

?>
