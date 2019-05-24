<?php

class RoomTest extends \PHPUnit\Framework\TestCase
{

    public function test()
    {
        $room = new Wumpus\Room(0, 1);

        $this->assertInstanceOf('Wumpus\Room', $room);
    }

    public function test_getNdx()
    {
        $room = new Wumpus\Room(55, 23);
        $this->assertEquals(55, $room->getNdx());
    }

    public function test_numMoreThanTen()
    {
        $room = new Wumpus\Room(0, 9);
        $this->assertFalse($room->numMoreThanTen());

        $room = new Wumpus\Room(0, 10);
        $this->assertFalse($room->numMoreThanTen());

        $room = new Wumpus\Room(0, 11);
        $this->assertTrue($room->numMoreThanTen());
    }
}