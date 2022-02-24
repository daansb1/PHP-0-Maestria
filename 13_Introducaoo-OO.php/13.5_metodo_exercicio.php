<?php

class Cachorro {

    function latir(){

        echo "Au Au! <br>";

    }

    function andar($m){

        echo "Cachorro está andando a $m metros <br>";

    }

}

$gabu = new Cachorro();
$gabu->latir();
$gabu->andar(5);

$gabu->andar(100);



?>