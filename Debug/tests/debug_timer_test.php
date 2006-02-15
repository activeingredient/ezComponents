<?php


class ezcDebugTimerTest extends ezcTestCase
{

    public function testStartStop()
    {
        $timer = new ezcDebugTimer();

        $point1 = microtime(true);
        $timer->startTimer("Ray", "host");
        $point2 = microtime(true);
        $timer->stopTimer("Ray");
        $point3 = microtime(true);
        
        $structure = $timer->getTimeData();
        $this->assertEquals(1, count($structure));
        $this->assertEquals("Ray", $structure[0]->name);
        $this->assertEquals("host", $structure[0]->group);

        $this->assertTrue( $structure[0]->startTime >= $point1 && $structure[0]->startTime <= $point2 );
        $this->assertTrue( $structure[0]->stopTime >= $point2 && $structure[0]->stopTime <= $point3 );
        $this->assertTrue( $structure[0]->elapsedTime <= $point3 - $point1);
    }

    public function testStartStopNoName()
    {
        $timer = new ezcDebugTimer();

        $timer->startTimer("Ray", "Local", "host");
        $timer->stopTimer();

        $structure = $timer->getTimeData();
        $this->assertEquals(1, count($structure));
    }

    public function testSwitchTimer()
    {
        $timer = new ezcDebugTimer();

        $point1 = microtime(true);
        $timer->startTimer("Ray",  "host");
        $point2 = microtime(true);
        $timer->switchTimer("Blaap", "Ray"); 
        $point3 = microtime(true);
        $timer->stopTimer("Blaap");
        $point4 = microtime(true);
 
        $structure = $timer->getTimeData();
        $this->assertEquals(1, count($structure));
        $this->assertEquals("Ray", $structure[0]->name);
        $this->assertEquals("host", $structure[0]->group);

        $this->assertEquals(1, count( $structure[0]->switchTime));
        $this->assertEquals("Blaap", $structure[0]->switchTime[0]->name);

        $this->assertTrue( $structure[0]->startTime >= $point1 && $structure[0]->startTime <= $point2 );
        $this->assertTrue( $structure[0]->switchTime[0]->time >= $point2 && $structure[0]->switchTime[0]->time <= $point3);
        $this->assertTrue( $structure[0]->stopTime >= $point3 && $structure[0]->stopTime <= $point4 );
    }

    public function testSwitchTwoTimer()
    {
        $timer = new ezcDebugTimer();
        $timer->startTimer("Ray", "Local", "host");
        $timer->switchTimer("Blaap", "Ray"); 
        $timer->switchTimer("hehe", "Blaap"); 
        $timer->stopTimer("hehe");

        $structure = $timer->getTimeData();
        $this->assertEquals(2, count( $structure[0]->switchTime));
    }

    public function testMultipleRunningTimers()
    {
        $timer = new ezcDebugTimer();
        $timer->startTimer("Ray", "Local", "host");
        $timer->startTimer("Ray2", "Local", "host");
        $timer->startTimer("Ray3", "Local", "bla");

        $this->assertEquals(false, $timer->stopTimer("hehe"));

        $timer->stopTimer("Ray2");
        $timer->stopTimer("Ray3");
        $timer->stopTimer("Ray");

        $structure = $timer->getTimeData();
        $this->assertEquals(3, count( $structure));

        // Expected order?
        $this->assertEquals("Ray2", $structure[0]->name);
        $this->assertEquals("Ray3", $structure[1]->name);
        $this->assertEquals("Ray",  $structure[2]->name);
    }

    public function testComfortableStructure()
    {
        $struct = $this->getTimeData();
    }

    protected function getTimeData()
    {
        $time = new ezcDebugTimer();
        $time->startTimer("Script", "html_reporter_test", "script");


        if ( true != false ) $i_do_something = false;

        $time->startTimer("Timing module", "content", "module");

        if ( true != false ) $i_do_something = true;

        $this->mySQLFunction($time);
        $this->mySQLFunction($time);
        $this->mySQLFunction($time);
        
        $time->stopTimer("Timing module");

        $time->stopTimer("Script");

        return $time->getTimeData();
    }

    protected function mySQLFunction(&$time)
    {
        $time->startTimer("my query", "html_reporter_test" , "query");

        // My query.. 

        $time->stopTimer("my query");
    }


    public static function suite()
    {
        return new ezcTestSuite("ezcDebugTimerTest");
    }
  
}
?>
