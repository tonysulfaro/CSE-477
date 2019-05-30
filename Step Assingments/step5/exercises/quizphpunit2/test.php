<?php

class EmptyTest extends \PHPUnit\Framework\TestCase {

    public function test_example() {
        $this->assertTrue(true);

        $quad = new Quadratic(0,1,-1);
        $result = $quad->roots();
        $this->assertEquals($result, null, "Should be", 0.0001);

        $quad = new Quadratic(1,1,-1);
        $result = $quad->roots();
        $this->assertEquals($result[0], -1.618, "Should be", 0.001);
        $this->assertEquals($result[1], 0.618, "Should be", 0.001);

        $quad = new Quadratic(2,1,1);
        $result = $quad->roots();
        $this->assertEquals($result[0], null, "Should be", 0.0001);
        $this->assertEquals($result[1], null, "Should be", 0.0001);
    }

}
