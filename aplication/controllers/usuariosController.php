<?php

/**
 * Created by SocialNodes.
 * User: LuisAnc
 * Date: 04/11/2017
 * Controlador ejemplo basico
 */
class usuariosController extends coreController
{
    public $adapter;
    private $model;

    public function __construct()
    {
        parent::__construct();

        //Inicializa el modelo
        $this->model=new usuariosModel($this->adapter);
    }

    public function index(){

        //Consulta la base de datos
        $allusers=$this->model->getAll();

        //Informacion de configuracion global
        $data=array('languaje'=>DEFAULT_LANG,
            'view'=>$this->model->getTable());


        //Cargamos la vista y le pasamos valores
        $this->loadView("usuariosView",array(
            "allusers"=>$allusers,
            "dataLog"=>$data
        ),$this->dataUser);
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];

            $this->model->deleteBy('idUsuario',$id);
        }
        $this->redirect();
    }
}