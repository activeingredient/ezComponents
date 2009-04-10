<?php
/**
 * ezcDocumentPdfHyphenatorTests
 * 
 * @package Document
 * @version //autogen//
 * @subpackage Tests
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */

/**
 * Test suite for class.
 * 
 * @package Document
 * @subpackage Tests
 */
class ezcDocumentPdfPageTests extends ezcTestCase
{
    public static function suite()
    {
        return new PHPUnit_Framework_TestSuite( __CLASS__ );
    }

    public function testEmptyPageFixedBlock()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $this->assertEquals(
            new ezcDocumentPdfBoundingBox( 10, 10, 80, 80 ),
            $page->testFitRectangle( 10, 10, 80, 80 )
        );
    }

    public function testOnPageBoundings()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $this->assertEquals(
            new ezcDocumentPdfBoundingBox( 0, 0, 100, 100 ),
            $page->testFitRectangle( 0, 0, 100, 100 )
        );
    }

    public function testOutOfPageBoundingsX()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $this->assertEquals(
            false,
            $page->testFitRectangle( -10, 10, 80, 80 )
        );
    }

    public function testOutOfPageBoundingsY()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, -10, 80, 80 )
        );
    }

    public function testOutOfPageBoundingsWidth()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, 10, 95, 80 )
        );
    }

    public function testOutOfPageBoundingsHeight()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, 10, 80, 95 )
        );
    }

    public function testCoveredAreaNoIntersection()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 100, 20 ) );
        $this->assertEquals(
            new ezcDocumentPdfBoundingBox( 10, 30, 80, 60 ),
            $page->testFitRectangle( 10, 30, 80, 60 )
        );
    }

    public function testCoveredAreaOnLineNoIntersection()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 100, 20 ) );
        $this->assertEquals(
            new ezcDocumentPdfBoundingBox( 10, 20, 80, 70 ),
            $page->testFitRectangle( 10, 20, 80, 70 )
        );
    }

    public function testCoveredAreaIntersectionXIn()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 20, 100 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, 10, 80, 80 )
        );
    }

    public function testCoveredAreaIntersectionXInSecond()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 1, 1 ) );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 20, 100 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, 10, 80, 80 )
        );
    }

    public function testCoveredAreaIntersectionYIn()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 100, 20 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, 10, 80, 80 )
        );
    }

    public function testCoveredAreaIntersectionWidthIn()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 80, 0, 20, 100 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, 10, 80, 80 )
        );
    }

    public function testCoveredAreaIntersectionHeightIn()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 80, 100, 20 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, 10, 80, 80 )
        );
    }

    public function testCoveredAreaIntersectionInnerBox()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 20, 20, 60, 60 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, 10, 80, 80 )
        );
    }

    public function testCoveredAreaExcatMatch()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 10, 10, 80, 80 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, 10, 80, 80 )
        );
    }

    public function testCoveredAreaHorizontalMovingImpossible()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 10, 10, 80, 80 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( null, 10, 20, 80 )
        );
    }

    public function testCoveredAreaHorizontalMoving()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 20, 100 ) );
        $this->assertEquals(
            new ezcDocumentPdfBoundingBox( 20, 10, 10, 80 ),
            $page->testFitRectangle( null, 10, 10, 80 )
        );
    }

    public function testCoveredAreaHorizontalMovingOutOfPage()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 20, 100 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( null, 10, 90, 80 )
        );
    }

    public function testCoveredAreaHorizontalMovingOutIntoBox()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 80, 0, 20, 100 ) );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 20, 100 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( null, 10, 70, 80 )
        );
    }

    public function testCoveredAreaVerticalMoving()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 100, 20 ) );
        $this->assertEquals(
            new ezcDocumentPdfBoundingBox( 10, 20, 80, 10 ),
            $page->testFitRectangle( 10, null, 80, 10 )
        );
    }

    public function testCoveredAreaVerticalMovingOutOfPage()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 100, 20 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, null, 80, 90 )
        );
    }

    public function testCoveredAreaVerticalMovingOutIntoBox()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 80, 100, 20 ) );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 100, 20 ) );
        $this->assertEquals(
            false,
            $page->testFitRectangle( 10, null, 80, 70 )
        );
    }

    public function testCoveredAreaBidirectionalMove()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 10, 10 ) );
        $this->assertEquals(
            new ezcDocumentPdfBoundingBox( 10, 10, 80, 80 ),
            $page->testFitRectangle( null, null, 80, 80 )
        );
    }

    public function testCoveredAreaBidirectionalMove2()
    {
        $page = new ezcDocumentPdfPage( 100, 100 );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 100, 10 ) );
        $page->setCovered( new ezcDocumentPdfBoundingBox( 0, 0, 10, 100 ) );
        $this->assertEquals(
            new ezcDocumentPdfBoundingBox( 10, 10, 80, 80 ),
            $page->testFitRectangle( null, null, 80, 80 )
        );
    }
}
?>
