<?php

class Animal {

    public $nome;

    function escolherNome($nome){

        $this->nome = $nome;

    }

    function latir(){
        return "Au Au <br>";
    }

    function latirForte() {
        return strtoupper($this->latir());
    }

}

$bob = new Animal();

echo " O nomme do animal é: $bob->nome <br>";

$bob->escolherNome("Bob");

echo " O nomme do animal é: $bob->nome <br>";

echo $bob->latir();

echo $bob->latirForte();

