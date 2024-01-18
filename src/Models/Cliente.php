<?php 
namespace Devjunior\Desafioobj\Models;


class Cliente{

    private $id;
    private $nome;
    private $observacao;
    private $telefone;

    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name,$value)
    {
        $this->$name = $value;
    }
}