<?php

/**
 * Maintains a collection of points
 */
class PointCollection {
    /**
     * Add a new point to the collection
     * @param $x X value
     * @param $y Y value
     */
    public function add($x, $y) {
        $this->points[] = array('x'=>$x, 'y'=>$y);
    }

    /**
     * Sort the point collection by distance from the origin.
     * @param $distance A function with arguments $x, $y.
     * Returns the distance of the point $x, $y from the origin.
     */
    public function sort($distance) {

    }

    public function sortManhattan() {
        $this->sort(function($x, $y) {
            return abs($x) + abs($y);
        });
    }

    /**
     * Sort the point collection by Euclidian distance from
     * the origin.
     */
    public function sortEuclidian(){
        $this->sort(function($x, $y) {
            return sqrt($x*$x+$y*$y));
        });
    }


    /**
     * @return array Collection of points
     */
    public function getPoints() {
        return $this->points;
    }

    private $points = array();	///< The point collection
}