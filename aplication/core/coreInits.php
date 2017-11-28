<?php

/**
 * Created by SocialNodes.
 * User: LuisAnc
 * Date: 02/11/2017
 * Funciones principales para manejo de base de datos.
 * Pendiente: insert & update.
 * VC: 1.0.0
 */
class coreInits
{
    private $table;
    private $db;
    private $conectar;

    public function __construct($table, $adapter) {
        $this->table=(string) $table;
        $this->db=$adapter; 
    }

    public function getConetar(){
        return $this->db;
    }

    public function db(){
        return $this->db;
    }

    public function getAll(){
        $query=$this->db->query("SELECT * FROM $this->table");

        while ($row = $query->fetchobject()) {
            $resultSet[]=$row;
        }

        return $resultSet;
    }

    public function getBy($column,$value){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");

        while($row = $query->fetch_object()) {
            $resultSet[]=$row;
        }

        return $resultSet;
    }

    public function deleteBy($column,$value){
        $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'");
        return $query;
    }
}
?>