<?php

class Cliente
{
    public $id;
    public $nome;
    public $cpf;
    public $telefone;
    public $email;
    public $endereco;

    public function __construct($id,$nome, $cpf, $telefone, $email, $endereco)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->endereco = $endereco;
    }

    public function getId(){
        echo $this->id;
    }

    public function getNome(){
        echo $this->nome;
    }

    public function getCpf(){
        return $this->cpf;
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
}