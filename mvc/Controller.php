<?php
/**
 * Controller class act as a control,send and receive the information view and Model
 */
class Controller
{
    /**variable $model*/
    public $model;
    /**variable $view*/
    public $view;

    /**
     * construct method can automatically instance the object when the class is called
     */
    public function __construct() {
        $this->model = new Model();
        $this->view = new View();
    }

    /**
     * Action method send a model logics inside the view methods
     */
    public function Action() {
        $this->view->send($this->model->add($x,$y));
        $this->view->receive($this->model->multiplication($z,$y));
    }
}