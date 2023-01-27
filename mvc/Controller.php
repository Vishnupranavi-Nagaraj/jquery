<?php
/**
 * Controller class act as a control,send and receive the information view and Model
 */
class Controller
{
    /**variable $view*/
    public $view;

    /**
     * construct method can automatically instance the object when the class is called
     */
    public function __construct() 
    {
        $this->view = new View();
    }

    /**
     * Action method send a model logics inside the view methods
     */
    public function action() 
    {
        $this->view->send();
    }
}