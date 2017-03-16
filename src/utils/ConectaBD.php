<?php
namespace utils;

class ConectaBD{

   protected $db;

   public function __construct(){
      if($this->db == null){
         $this->db = new \PDO('sqlite:clientes.db');
         $this->db->exec("CREATE TABLE IF NOT EXISTS clientes (id INTEGER PRIMARY KEY AUTOINCREMENT, nome VARCHAR( 255 ), pessoa VARCHAR( 255 ), cpf_cnpj VARCHAR( 255 ), telefone VARCHAR( 255 ), email VARCHAR( 255 ), endereco VARCHAR( 255 ), grau VARCHAR( 255 ))");
      }
   }

}
