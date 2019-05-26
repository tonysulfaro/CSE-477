<?php

class DiscountTest extends \PHPUnit\Framework\TestCase
{

    public function test_example()
    {
        $discount = new Discount();

        $this->assertEquals(0, $discount->numMembers());
        $this->assertEquals(0, $discount->numDiscounts());

        $discount->addMember("billy", 55);
        $discount->addMember("billy", 77);
        $discount->addMember("bob", 50);
        $discount->addMember("jane", 50);

        $this->assertEquals(4, $discount->numMembers());
        $this->assertEquals(2, $discount->numDiscounts());
    }

}
