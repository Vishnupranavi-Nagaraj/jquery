<?php
/**
 * View class render the layout and which is in presentation layer
 */
class View
{
    /**
     * send method view the data from the controller
     * @param $data
     */
    public function send($data) {
        echo $data;
    }

    /**
     * receive method view the data from the controller
     * @param $data 
     */
    public function receive($data) {
        echo $data;
    }
}