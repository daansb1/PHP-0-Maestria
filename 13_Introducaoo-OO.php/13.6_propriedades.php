<?php

class Car {

    public $rodas;
    public $aro = 20;
    public $cor = "Branco";

    function ligar() {
        echo " Vruuuuuummm <br>";
    }

}

$ferrari = new Car();

$ferrari->rodas = 4;

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";

$ferrari->cor = "Vermelha <br>";

echo $ferrari->cor;

$ferrari->ligar();


