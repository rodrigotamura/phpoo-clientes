<?php
namespace vendor\Cliente;
use vendor\utils\ConectaBD;

class ListaClientes extends ConectaBD
{

    public function mostraGrau($grau){
        $mostra = "";
        for($g = 0 ; $g < $grau ; $g++){
         //   $mostra.= "<img src='star.png' />&nbsp;";
           $mostra.= "<span class='glyphicon glyphicon-star' style='color:Orange; font-size:15px;'></span>&nbsp;";
        }
        return $mostra;
   }

   public function getClientes(){
      $stmt = $this->db->prepare("SELECT * FROM clientes");
      $stmt->execute();
      return $stmt->fetchAll(\PDO::FETCH_ASSOC);
   }
}
