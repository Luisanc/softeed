<?php

/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 21/11/2017
 * Time: 09:28 AM
 */
class estudiantes extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model=new estudiantesModel($this->adapter);
    }
    public function index(){
        /*if (!empty($this->dataUser)){
            $this->loadView('public/students',array());
        }*/

        $this->loadView('public/students',array(),$this->dataUser);
    }

}