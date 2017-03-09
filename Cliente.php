<?php

class Cliente
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
}
