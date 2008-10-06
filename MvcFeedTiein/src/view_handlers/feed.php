<?php
/**
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package MvcFeedTiein
 */

/**
 * The view handler that uses PHP files to render result objects.
 * 
 * @package MvcFeedTiein
 * @version //autogentag//
 * @mainclass
 */
class ezcMvcFeedViewHandler implements ezcMvcViewHandler
{
    /**
     * Contains the zone name
     *
     * @var string
     */
    protected $zoneName;

    protected $decorator;

    /**
     * Contains the result after process() has been called.
     *
     * @var mixed
     */
    protected $result;

    /**
     * Contains the variables that will be available in the template.
     *
     * @var array(mixed)
     */
    protected $variables = array();

    /**
     * Contains the embedded feed object.
     * 
     * @var ezcFeed
     */
    public $feed;

    protected $feedType;

    /**
     * Creates a new view handler, where $zoneName is the name of the block and
     * $decorator is the object implementing decorating methods for the feed
     * and feed items.
     *
     * @var string $zoneName
     * @var ezcMvcFeedDecorator $decorator
     */
    public function __construct( $zoneName, $decorator = null, $feedType = 'rss2' )
    {
        $this->zoneName = $zoneName;
        $this->decorator = $decorator;
        $this->feed = new ezcFeed;
        $this->feedType = $feedType;
    }

    /**
     * Adds a variable to the template, which can then be used for rendering
     * the view.
     *
     * @param string $name
     * @param mixed $value
     */
    public function send( $name, $value )
    {
        $this->variables[$name] = $value;
    }

    function map( $var, &$elementValue )
    {
        switch ( $var )
        {
            case 'fullname':
                return 'authorName';
            case 'status':
                return 'title';
            case 'date':
                return 'published';
            case 'id':
                $elementValue = 'http://dev.thewire/updates/' . $elementValue;
                return 'link';
        }
        return $var;
    }

    /**
     * Processes the template with the variables added by the send() method.
     * The result of this action should be retrievable through the getResult() method.
     */
    public function process( $last )
    {
        $feed = new ezcFeed;
        $this->decorator->decorateFeed( $feed );

        foreach ( $this->variables[$this->decorator->getItemVariable()] as $itemData )
        {
            $item = $feed->add( 'item' );
            $this->decorator->decorateFeedItem( $item, $itemData );
        }
        $this->result = $feed->generate( $this->feedType );
    }

    public function __get( $name )
    {
        return $this->variables[$name];
    }

    public function __isset( $name )
    {
        return array_key_exists( $this->variables, $name );
    }

    /**
     * Returns the name of the template, as set in the constructor.
     *
     * @return string
     */
    public function getName()
    {
        return $this->zoneName;
    }

    /**
     * Returns the result of the process() method.
     *
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}
?>
