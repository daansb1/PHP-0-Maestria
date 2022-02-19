<?php

class Pessoa {

    function falar() {
        echo "Olá, eu sou um objeto <br>";
    }

    function somar($x, $y){
        echo $x + $y . "<br>";
    }

}

$daniel = new Pessoa;

$daniel->falar();
$daniel->falar();

$joao = new Pessoa;

$joao->somar(10, 10);
$daniel->somar(30,30);