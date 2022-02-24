<?php

class Humano {

     const OLHOS = 2;
     const BRACOS = 2;
     const PERNAS = 2;


    function  mostrarConstante(){

        echo self::BRACOS . "<br>";

    }

}

$daniel = new Humano();

echo $daniel::OLHOS . "<br>";

$daniel->mostrarConstante();