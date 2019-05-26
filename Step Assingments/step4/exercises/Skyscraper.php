<?php


class Skyscraper
{

    function __construct($ary)
    {
        $this->skyscraper = $ary;
    }

    // number of times number increases for skyscraper
    function rowCnt($r)
    {
        $count = 1;
        $row = $this->skyscraper[$r - 1];
        $max = $row[0];

        for ($i = 1; $i < sizeof($row); $i++) {
            if ($row[$i] > $max) {
                $max = $row[$i];
                $count++;
            }
        }
        return $count;
    }

    // number of increases for column
    function colCnt($c)
    {
        $count = 1;
        $max = $this->skyscraper[0][$c - 1];

        for ($i = 1; $i < sizeof($this->skyscraper); $i++) {
            if ($this->skyscraper[$i][$c - 1] > $max) {
                $max = $this->skyscraper[$i][$c - 1];
                $count++;
            }
        }
        return $count;
    }

    private $skyscraper;
}

$skyscraper = [[2, 1, 4, 3],
    [3, 4, 1, 2],
    [4, 2, 3, 1],
    [1, 3, 2, 4]];

$s = new Skyscraper($skyscraper);
echo $s->rowCnt(1) . ' ';
echo $s->rowCnt(2) . ' ';
echo $s->rowCnt(3) . ' ';
echo $s->rowCnt(4) . '<br>';
echo $s->colCnt(1) . ' ';
echo $s->colCnt(2) . ' ';
echo $s->colCnt(3) . ' ';
echo $s->colCnt(4) . '<br>';