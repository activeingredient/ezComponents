<?php
/**
 * ezcCacheStorageFileOptionsTest 
 * 
 * @package Cache
 * @subpackage Tests
 * @version //autogen//
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Abstract base test class for ezcCacheStorageFileOptions tests.
 * 
 * @package Cache
 * @subpackage Tests
 */
class ezcCacheStorageFileOptionsTest extends ezcTestCase
{
	public static function suite()
	{
		return new PHPUnit_Framework_TestSuite( "ezcCacheStorageFileOptionsTest" );
	}
    
    public function testConstructor()
    {
        $fake = new ezcCacheStorageFileOptions(
            array( 
                "ttl"         => 86400,
                "extension"   => ".cache",
                "permissions" => 0644, 
            )
        );
        $this->assertEquals( 
            $fake,
            new ezcCacheStorageFileOptions(),
            'Default values incorrect for ezcCacheStorageFileOptions.'
        );
    }

    public function testNewAccess()
    {
        $opt = new ezcCacheStorageFileOptions();

        $this->assertEquals( $opt["ttl"], 86400 );
        $this->assertEquals( $opt["extension"], ".cache" );
        $this->assertEquals( $opt["permissions"], 0644 );
    }

    public function testGetAccessSuccess()
    {
        $opt = new ezcCacheStorageFileOptions();

        $this->assertEquals( $opt->ttl, 86400 );
        $this->assertEquals( $opt->extension, ".cache" );
        $this->assertEquals( $opt->permissions, 0644 );
    }

    public function testGetAccessFailure()
    {
        $opt = new ezcCacheStorageFileOptions();
        
        try
        {
            echo $opt->foo;
        }
        catch ( ezcBasePropertyNotFoundException $e )
        {
            return;
        }
        $this->fail( "ezcBasePropertyNotFoundException not thrown on access to invalid property foo." );
    }

    public function testSetAccessSuccess()
    {
        $opt = new ezcCacheStorageFileOptions();

        $opt->ttl = false;
        $opt->ttl = 23;
        $opt->extension = ".foo";
        $opt->permissions = 0777;

        $this->assertEquals( $opt->ttl, 23 );
        $this->assertEquals( $opt->extension, ".foo" );
        $this->assertEquals( $opt->permissions, 0777 );
    }

    public function testSetAccessFailure()
    {
        $opt = new ezcCacheStorageFileOptions();
        
        $this->genericSetFailureTest( $opt, "ttl", "foo" );
        $this->genericSetFailureTest( $opt, "ttl", true );
        $this->genericSetFailureTest( $opt, "extension", 23 );
        $this->genericSetFailureTest( $opt, "extension", true );
        $this->genericSetFailureTest( $opt, "permissions", true );
        $this->genericSetFailureTest( $opt, "permissions", "foo" );
        $this->genericSetFailureTest( $opt, "permissions", -10 );
        $this->genericSetFailureTest( $opt, "permissions", 01000 );

        try
        {
            $opt->foo = "bar";
        }
        catch ( ezcBasePropertyNotFoundException $e )
        {
            return;
        }
        $this->fail( "ezcBasePropertyNotFoundException not thrown on set access to invalid property." );
    }

    public function testIssetAccess()
    {
        $opt = new ezcCacheStorageFileOptions();
        
        $this->assertTrue( isset( $opt->ttl ) );
        $this->assertTrue( isset( $opt->extension ) );
        $this->assertTrue( isset( $opt->permissions ) );
        $this->assertFalse( isset( $opt->foo ) );
    }

    protected function genericSetFailureTest( $obj, $property, $value )
    {
        try
        {
            $obj->$property = $value;
        }
        catch ( ezcBaseValueException $e )
        {
            return;
        }
        $this->fail( "ezcBaseValueException not thrown on invalid value '$value' for " . get_class( $obj ) . "->$property." );
    }
}
?>
