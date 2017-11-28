<?php

/**
 * Created by SocialNodes.
 * User: LuisAnc
 * Date: 02/11/2017
 * Funciones principales para los controladores
 * Vc: 1.0.0
 */
class coreController
{
    public $adapter;

    public $dataUser;

    public function __construct(){
        require_once 'coreConection.php';
        require_once 'coreInits.php';
        require_once 'coreModel.php';

        foreach(glob("aplication/models/*.php") as $file){
            require_once $file;
        }

        //Inicializa la conexion con la base de datos
        $this->conectar=new coreConection();
        $this->adapter=$this->conectar->startConexion();
    }

    /*Carga la vista
    * Vista: Nombre de la vista
    * Datos: Informacion a mostrar en la vista
    */
    public function loadView($vista,$datos,$data){
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor;
        }

        require_once 'coreUrl.php';
        $helper=new coreUrl();
        $sesion=$data;
        require 'aplication/views/header/header.php';
        require_once 'aplication/views/'.$vista.'.php';
    }

    /*Crea la accion y la url*/
    public function redirect($controlador=DEFAULT_CONTROLLER,$accion=DEFAULT_ACTION){
        header("Location:index.php?aplication/controllers=".$controlador."&action=".$accion);
    }

    public function login(){

    }
}