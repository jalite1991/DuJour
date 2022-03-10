<?php

namespace DuJour\Test;

require dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use DuJour\DateTime;

class DateTimeTest extends TestCase
{
    public function setUp()
    {
        $this->DateTime = new DateTime('2011-01-01T15:03:01.012345Z', null, null);
    }

    public function tearDown()
    {
        unset($this->DateTime);
    }

    public function testIsDateime()
    {
        $output = $this->DateTime instanceof \DateTime;
        $this->assertEquals(
            true,
            $output,
            'Test should be instsance of \Datetime.'
        );
    }

    public function testDefaultFormating()
    {
        $output = $this->DateTime->format('Y-m-d h:i:s a');

        $this->assertEquals(
            '2011-01-01 03:03:01 pm',
            $output,
            'Date should equal 2011-01-01'
        );
    }

    public function testSetDate()
    {
        # code...
    }

    public function testSetTime()
    {
        # code...
    }

    public function testAddDate()
    {
        # code...
    }

}
