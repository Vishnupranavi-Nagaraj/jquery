<?php
/**
 * View class render the layout and which is in presentation layer
 */
class View
{
    /**
     * creating object for a model
     */
    public function __construct()
    {
        $this->model = new Model();
    }

    /**
     * send method view the data from the controller
     */
    public function send()
    {
        echo $this->model->add($x,$y);
    }
}