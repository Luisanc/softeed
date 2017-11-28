<?php

/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 21/11/2017
 * Time: 10:01 AM
 */
class login extends coreController
{

    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        $this->model = new loginModel($this->adapter);
    }
    public function index(){
        $this->loadView('public/signin',array(),$this->dataUser);
    }

    public function entrar(){
        $user=$_POST['mail'];
        $pass=$_POST['pass'];
        $result=$this->model->checkLogin($user,$pass);
        //var_dump($result);
        if (!empty($result)) {
            if ($result[0]=='R')
            {
                $this->loadView("public/students",array('userData' =>$result,),$this->dataUser);
            }
            else if($result[0]=='E')
            {
                $id=$result[1];
                $userData=$this->model->GetuserDataEstudiante($id);
                $this->dataUser=$userData;
                $this->redirect();
                //$this->loadView("public/profile",array('userData' =>$userData,),$this->dataUser);
            }
        }
    }

}