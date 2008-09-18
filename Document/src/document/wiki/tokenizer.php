<?php
/**
 * File containing the ezcDocumentWikiTokenizer
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Tokenizer for RST documents
 * 
 * @package Document
 * @version //autogen//
 */
abstract class ezcDocumentWikiTokenizer
{
    /**
     * List with tokens and a regular expression matching the given token.
     *
     * The tokens are matched in the given order.
     * 
     * @var array
     */
    protected $tokens = array();

    /**
     * Construct tokenizer
     *
     * Create token array with regular repression matching the respective
     * token.
     * 
     * @return void
     */
    abstract public function __construct();

    /**
     * Tokenize the given file
     * 
     * The method tries to tokenize the passed files and returns an array of
     * ezcDocumentWikiToken struct on succes, or throws a
     * ezcDocumentTokenizerException, if something could not be matched by any
     * token.
     *
     * @param string $file 
     * @return array
     */
    public function tokenizeFile( $file )
    {
        if ( !file_exists( $file ) || !is_readable( $file ) )
        {
            throw new ezcBaseFileNotFoundException( $file );
        }

        return $this->tokenizeString( file_get_contents( $file ) );
    }

    /**
     * Convert tabs to spaces
     *
     * Convert all tabs to spaces, as defined in:
     * http://docutils.sourceforge.net/docs/ref/rst/restructuredtext.html#whitespace
     * 
     * @param ezcDocumentWikiToken $token 
     * @return void
     */
    protected function convertTabs( ezcDocumentWikiToken $token )
    {
        while ( ( $position = strpos( $token->content, "\t" ) ) !== false )
        {
            $token->content =
                substr( $token->content, 0, $position ) .
                str_repeat( ' ', 9 - ( ( $position + $token->position ) % 8 ) ) .
                substr( $token->content, $position + 1 );
        }
    }

    /**
     * Tokenize the given string
     * 
     * The method tries to tokenize the passed strings and returns an array of
     * ezcDocumentWikiToken struct on succes, or throws a
     * ezcDocumentTokenizerException, if something could not be matched by any
     * token.
     *
     * @param string $string 
     * @return array
     */
    public function tokenizeString( $string )
    {
        $line     = 0;
        $position = 1;
        $tokens   = array();
        $string   = "\n" . $string;

        while ( strlen( $string ) > 0 )
        {
            foreach ( $this->tokens as $token => $expression )
            {
                if ( preg_match( $expression, $string, $matches ) )
                {
                    // A token matched, so add the matched token to the token
                    // list and update all variables.
                    $newToken = new ezcDocumentWikiToken(
                        $token,
                        ( isset( $matches['value'] ) ? $matches['value'] : null ),
                        $line,
                        $position
                    );

                    $match = isset( $matches['match'] ) ? $matches['match'] : $matches[0];

                    // Removed matched stuff from input string
                    $string = substr( $string, $length = strlen( $match ) );

                    // On a newline token reset the line position and increase the line value
                    if ( $token === ezcDocumentWikiToken::NEWLINE )
                    {
                        ++$line;
                        $position = 0;
                    }

                    // Convert tabs to spaces for whitespace tokens
                    if ( $token === ezcDocumentWikiToken::WHITESPACE )
                    {
                        $this->convertTabs( $newToken );
                    }

                    // If we found an explicit EOF token, just exit the parsing process.
                    if ( $token === ezcDocumentWikiToken::EOF )
                    {
                        break 2;
                    }

                    // Add token to extracted token list
                    $tokens[] = $newToken;

                    // Update position, not before converting tabs to spaces.
                    $position += ( $token === ezcDocumentWikiToken::NEWLINE ) ? 1 : strlen( $newToken->content );

                    // Restart the while loop, because we matched a token and
                    // can retry with shortened string.
                    continue 2;
                }
            }

            // None of the token definitions matched the input string. We throw
            // an exception with the position of the content in the input
            // string and the contents we could not match.
            //
            // This should never been thrown, but it is hard to prove that
            // there is nothing which is not matched by the regualr expressions
            // above.
            throw new ezcDocumentWikiTokenizerException(
                $line,
                $position,
                $string
            );
        }

        // Finally append ainother newline token and a end of file token, to
        // make parsing the end easier.
        $tokens[] = new ezcDocumentWikiToken(
            ezcDocumentWikiToken::NEWLINE,
            "\n", $line, $position
        );
        $tokens[] = new ezcDocumentWikiToken(
            ezcDocumentWikiToken::NEWLINE,
            "\n", $line, $position
        );
        $tokens[] = new ezcDocumentWikiToken(
            ezcDocumentWikiToken::EOF,
            null, $line, $position
        );

        return $tokens;
    }
}

?>
