<?php

class Discount
{
    const DISCOUNT_AGE = 55;

    public function addMember($name, $age)
    {
        $this->members[] = array('name' => $name, 'age' => $age);
    }

    public function numMembers()
    {
        return count($this->members);
    }

    public function numDiscounts()
    {
        $cnt = 0;
        foreach ($this->members as $member) {
            if ($member['age'] >= self::DISCOUNT_AGE) {
                $cnt++;
            }
        }

        return $cnt;
    }

    private $members = [];
}

