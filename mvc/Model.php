<?php
/**
 * Model contains logic information to send to the controller
 */
class Model
{
    /** $x passed as params*/
    private $x = 10;
    /** $y passed as params*/
    private $y = 10;

    /**
     * add method is used for add and send to view through controller
     * @param $x
     * @param $y
     * @return int
     */
    public function add($x,$y)
    {
        return $this->x + $this->y;
    }
}