<?php

class Pessoa
{

    public $nome = "Daniel";
    public $idade = 26;

    function Andar($msg){

        echo "Eu estou andando para $msg";

    }


}

$pessoa = new Pessoa();
echo $pessoa->nome . "<br>";
echo $pessoa->idade . "<br>";

$pessoa->Andar("O Sucesso!");