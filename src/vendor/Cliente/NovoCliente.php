<?php
namespace vendor\Cliente;
use utils\ConectaBD;

class NovoCliente extends ConectaBD
{
    private $id;
    private $nome;
    private $pessoa;
    private $cpf_cnpj;
    private $telefone;
    private $email;
    private $endereco;
    private $grau;

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPessoa(){
        return $this->pessoa;
    }

    public function getCpfCnpj(){
        return $this->cpf_cnpj;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getGrau(){
        return $this->grau;
    }

    #Adicionar os setters aqui
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }
    public function setPessoa($pessoa){
        $this->pessoa = $pessoa;
        return $this;
    }
    public function setCpfCnpj($cpf_cnpj){
        $this->cpf_cnpj = $cpf_cnpj;
        return $this;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }
    public function setGrau($grau){
        $this->grau = $grau;
        return $this;
    }
    public function mostraGrau($grau){
        $mostra = "";
        for($g = 0 ; $g < $grau ; $g++){
         //   $mostra.= "<img src='star.png' />&nbsp;";
           $mostra.= "<span class='glyphicon glyphicon-star' style='color:Orange; font-size:15px;'></span>&nbsp;";
        }
        return $mostra;
   }

   public function InsertDB(){
      try{
         $stmt = $this->db->prepare("INSERT INTO clientes (nome, pessoa, cpf_cnpj, telefone, email, endereco, grau) VALUES (:nome, :pessoa, :cpf_cnpj, :telefone, :email, :endereco, :grau)");
         $stmt->bindParam(':nome', $this->nome);
         $stmt->bindParam(':pessoa', $this->pessoa);
         $stmt->bindParam(':cpf_cnpj', $this->cpf_cnpj);
         $stmt->bindParam(':telefone', $this->telefone);
         $stmt->bindParam(':email', $this->email);
         $stmt->bindParam(':endereco', $this->endereco);
         $stmt->bindParam(':grau', $this->grau);

         $stmt->execute();

         return true;

      }catch (Exception $e){
         die('Ocorreu algum erro ao registrar um cliente. ('.$e->getMessage().')');
      }

   }

   public function getClientes(){
      $statement = $this->instance->prepare("SELECT * FROM clientes");
      return $statement->fetchAll();
   }
}
