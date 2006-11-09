<?php
/**
 * File containing the ezcMailRfc822DigestParser class
 *
 * @package Mail
 * @version //autogen//
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Parses RFC822 messages.
 *
 * Note that this class does not parse RFC822 digest messages containing of an extra header block.
 * Use the RFC822DigestParser to these.
 *
 * @package Mail
 * @version //autogen//
 * @access private
 */
class ezcMailRfc822DigestParser extends ezcMailPartParser
{
    /**
     * Holds the headers for this part.
     *
     * @var ezcMailHeadersHolder
     */
    private $headers = null;

    /**
     * Holds the digested message parser.
     *
     * @var ezcMailPartParser
     */
    private $mailParser = null;

    /**
     * Constructs a new digest parser with the headers $headers.
     *
     * @param ezcMailHeadersHolder $headers
     */
    public function __construct( ezcMailHeadersHolder $headers )
    {
        $this->headers = $headers;
        $this->mailParser = new ezcMailRfc822Parser();
    }

    /**
     * Parses each line of the digest body.
     *
     * Every line is part of the digested mail. It is sent directly to the mail parser.
     *
     * @param string $line
     */
    public function parseBody( $line )
    {
        $this->mailParser->parseBody( $line );
    }

    /**
     * Returns a ezcMailRfc822Digest with the digested mail in it.
     *
     * @returns ezcMailRfc822Digest
     */
    public function finish()
    {
        $digest = new ezcMailRfc822Digest( $this->mailParser->finish() );
        ezcMailPartParser::parsePartHeaders( $this->headers, $digest );
        return $digest;
    }

}

?>
