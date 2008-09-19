<?php
/**
 * File containing the 'ezcDocumentWikiCreoleToken'izer
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Tokenizer for Creole wiki documents.
 *
 * The Creole wiki syntax is a started effort to unify wiki markup languages.
 * Its documentation can be found at:
 *
 * http://www.wikicreole.org/
 * 
 * @package Document
 * @version //autogen//
 */
class ezcDocumentWikiCreoleTokenizer extends ezcDocumentWikiTokenizer
{
    /**
     * Common whitespace characters. The vertical tab is excluded, because it
     * causes strange problems with PCRE.
     */
    const WHITESPACE_CHARS  = '[\\x20\\t]';

    /**
     * Regular sub expression to match newlines.
     */
    const NEW_LINE  = '(?:\\r\\n|\\r|\\n)';

    /**
     * Characters ending a pure text section.
     */
    const TEXT_END_CHARS    = '/*^,#_\\\\\\[\\]{}|=\\r\\n\\t\\x20-';

    /**
     * Special characters, which do have some special meaaning and though may
     * not have been matched otherwise.
     */
    const SPECIAL_CHARS    = '/*^,#_\\\\\\[\\]{}|=-';

    /**
     * Construct tokenizer
     *
     * Create token array with regular repression matching the respective
     * token.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->tokens = array(
            // Match tokens which require to be at the start of a line before
            // matching the actual newlines, because they are the indicator for
            // line starts.
            'ezcDocumentWikiTitleToken' =>
                '(\\A' . self::NEW_LINE . '(?P<value>=+)' . self::WHITESPACE_CHARS . '+)S',
            'ezcDocumentWikiBulletListItemToken' =>
                '(\\A' . self::NEW_LINE . '(?P<value>\\*+)' . self::WHITESPACE_CHARS . '+)S',
            'ezcDocumentWikiEnumeratedListItemToken' =>
                '(\\A' . self::NEW_LINE . '(?P<value>#+)' . self::WHITESPACE_CHARS . '+)S',
            'ezcDocumentWikiPageBreakToken' =>
                '(\\A(?P<match>' . self::NEW_LINE . self::WHITESPACE_CHARS . '*(?P<value>-{4})' . self::WHITESPACE_CHARS . '*)' . self::NEW_LINE . ')S',
            'ezcDocumentWikiLiteralBlockToken' =>
                '(\\A(?P<match>' . self::NEW_LINE . '\\{\\{\\{' . self::NEW_LINE . '(?P<value>.+)' . self::NEW_LINE . '\\}\\}\\})' . self::NEW_LINE . ')SUs',
            'ezcDocumentWikiTableRowToken' =>
                '(\\A(?P<match>' . self::NEW_LINE . ')(?P<value>\\|))S',
            'ezcDocumentWikiParagraphIndentationToken' =>
                '(\\A' . self::NEW_LINE . '(?P<value>(?:>|:)+)' . self::WHITESPACE_CHARS . '*)S',

            // Whitespaces
            'ezcDocumentWikiNewLineToken' =>
                '(\\A' . self::WHITESPACE_CHARS . '*(?P<value>\\r\\n|\\r|\\n))S',
            'ezcDocumentWikiWhitespaceToken' =>
                '(\\A(?P<value>' . self::WHITESPACE_CHARS . '+))S',
            'ezcDocumentWikiEndOfFileToken' =>
                '(\\A(?P<value>\\x0c))S',

            // Escape character
            'ezcDocumentWikiEscapeCharacterToken' =>
                '(\\A(?P<value>~))S',

            // Inline markup
            'ezcDocumentWikiBoldToken' =>
                '(\\A(?P<value>\\*\\*))S',
            'ezcDocumentWikiItalicToken' =>
                '(\\A(?P<value>//))S',
            'ezcDocumentWikiMonospaceToken' =>
                '(\\A(?P<value>##))S',
            'ezcDocumentWikiSuperscriptToken' =>
                '(\\A(?P<value>\\^\\^))S',
            'ezcDocumentWikiSubscriptToken' =>
                '(\\A(?P<value>,,))S',
            'ezcDocumentWikiUnderlineToken' =>
                '(\\A(?P<value>__))S',
            'ezcDocumentWikiInlineLiteralToken' =>
                '(\\A\\{\\{\\{(?P<value>.+?\\}*)\\}\\}\\})Ss',
            'ezcDocumentWikiLineBreakToken' =>
                '(\\A(?P<value>\\\\\\\\))S',
            'ezcDocumentWikiImageStartToken' =>
                '(\\A(?P<value>\\{\\{))S',
            'ezcDocumentWikiImageEndToken' =>
                '(\\A(?P<value>\\}\\}))S',
            'ezcDocumentWikiLinkStartToken' =>
                '(\\A(?P<value>\\[\\[))S',
            'ezcDocumentWikiLinkEndToken' =>
                '(\\A(?P<value>\\]\\]))S',
            'ezcDocumentWikiTableHeaderToken' =>
                '(\\A(?P<value>\\|=))S',
            'ezcDocumentWikiSeparatorToken' =>
                '(\\A(?P<value>\\||' . self::WHITESPACE_CHARS . '*->' . self::WHITESPACE_CHARS . '*))S',
            'ezcDocumentWikiInterWikiLinkToken' =>
                '(\\A(?P<value>([A-Za-z]+):(?:[A-Z][a-z0-9_-]+){2,}))S',
            'ezcDocumentWikiInternalLinkToken' =>
                '(\\A(?P<value>(?:[A-Z][a-z]+){2,}))S',
            'ezcDocumentWikiExternalLinkToken' =>
                '(\\A(?P<match>(?P<value>[a-z]+://\S+?))[,.?!:;"\']?(?:' . self::WHITESPACE_CHARS . '|' . self::NEW_LINE . '|\\||]]|\\||$))S',


            // Match text except 
            'ezcDocumentWikiTextLineToken' =>
                '(\\A(?P<value>[^' . self::TEXT_END_CHARS . ']+))S',

            // Match all special characters, which are not valid textual chars,
            // but do not have been matched by any other expression.
            'ezcDocumentWikiSpecialCharsToken' =>
                '(\\A(?P<value>(?:[' . self::SPECIAL_CHARS . '])+))S',
        );
    }
}

?>
