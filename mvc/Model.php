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
    /** $z passed as params*/
    private $z = 100;

    /**
     * add method is used for add and send to view through controller
     * @param $x
     * @param $y
     * @return int
     */
    public function add($x,$y) {
        echo "Addition:";
        return $this->x + $this->y;
    }

    /**
     * multiplication method is used for add and send to view through controller
     * @param $x
     * @param $y
     * @return int
     */
    public function multiplication($z,$y) {
        echo "<br> Multiplication:";
        return $this->z * $this->y;
    }
}