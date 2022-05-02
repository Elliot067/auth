<?php

class idclient
{
    private $DB;

    public function __construct($DB){
        if(!isset($_SESSION)){
            session_start();
        }
        $this->DB = $DB;
    }
    public function ajouter($id_client){
            $_SESSION['idclient'] = $id_client;
    }

}