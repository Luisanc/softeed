<?php

/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 21/11/2017
 * Time: 10:02 AM
 */
class registre extends coreController
{
    public function __construct()
    {
        parent::__construct();

        $this->model=new estudiantesModel($this->adapter);
    }

    public function index(){
        /*if (!empty($this->dataUser)){
            $this->loadView('public/signin',array());
        }*/
        $this->loadView('public/signup',array(),$this->dataUser);
    }

    public function reclutador(){
        $this->loadView('public/signup_r',array(),$this->dataUser);
    }

    public function createReclutador(){
        
    }

    public function estudiante(){
        $this->loadView('public/signup_e',array(),$this->dataUser);
    }
}