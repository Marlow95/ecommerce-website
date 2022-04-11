<?php

use PHPUnit\Framework\TestCase;


class ExampleTest extends TestCase
{
    public function testEquals(){
        $n = 7;
        $x = 7;
        $this->assertEquals(7, $n);
    }
}

