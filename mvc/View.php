<?php
/**
 * View class render the layout and which is in presentation layer
 */
class View
{
    public function __construct()
    {
        $this->model = new Model();
    }

    /**
     * send method view the data from the controller
     * @param $data
     */
    public function send()
    {
        echo $this->model->add($x,$y);
    }
}