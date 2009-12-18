<?php
/**
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogen//
 * @filesource
 * @package Reflection
 * @subpackage Tests
 */

class ezcReflectionArrayTypeTest extends ezcTestCase
{
    /**
     * @var ezcReflectionArrayType
     */
    protected $type;

    public function setUp()
    {
        $this->type = new ezcReflectionArrayType( 'string[]' );
    }

    public function testGetArrayType()
    {
        $this->assertEquals( new ezcReflectionPrimitiveType( 'string' ), $this->type->getArrayType() );
    }

    public function testGetMapIndexType()
    {
        $this->assertNull( $this->type->getMapIndexType() );
    }

    public function testGetMapValueType()
    {
        $this->assertNull( $this->type->getMapValueType() );
    }

    public function testIsArray()
    {
        $this->assertTrue( $this->type->isArray() );
    }

    public function testIsClass()
    {
        $this->assertFalse( $this->type->isClass() );
    }

    public function testIsPrimitive()
    {
        $this->assertFalse( $this->type->isPrimitive() );
    }

    public function testIsMap()
    {
        $this->assertFalse( $this->type->isMap() );
    }

    public function testToString()
    {
    }

    public function testIsScalarType()
    {
        $this->assertFalse( $this->type->isScalarType() );
    }

    public function testGetXmlNameWithPrefix()
    {
        $this->assertEquals( 'tns:ArrayOfstring', $this->type->getXmlName( true ) );
    }

    public function testGetXmlNameWithoutPrefix()
    {
        $this->assertEquals( 'ArrayOfstring', $this->type->getXmlName( false ) );
    }

    public function testGetNamespace()
    {
        $this->assertEquals( '', $this->type->getNamespace() );
    }

    public function testGetXmlSchema()
    {
        $expected = new DOMDocument;
        $expected->preserveWhiteSpace = false;
        $expected->load( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'array.xsd' );

        $actual = new DOMDocument;
        $actual->appendChild( $this->type->getXmlSchema( $actual ) );

        $this->assertEquals( $expected, $actual );
    }

    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( 'ezcReflectionArrayTypeTest' );
    }
}
?>
