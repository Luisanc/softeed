<?php

class loginModel extends coreModel
{
	private $table;

    public function __construct($adapter){
        $this->table="usuarios_entrar";
        parent::__construct($this->table, $adapter);
    }

    public function checkLogin($user,$pass){
    	$query="SELECT TIPO_USUARIO,ID_ESTUDIANTE,ID_RECLUTADOR FROM ".$this->table." WHERE ".
    	"correo = '".$user."' AND contraseña = '".$pass."'";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }

    public function GetuserDataEstudiante($id){
    	$query="SELECT * FROM estudiante WHERE ID =".$id;
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }

    public function GetUserDataReclutador($id){

    }
}
