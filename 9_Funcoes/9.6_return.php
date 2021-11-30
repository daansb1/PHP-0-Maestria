<?php

function calculo($a, $b) {

    return $a / $b;

}

echo calculo(4, 2) . "<br>";

$x = calculo(2, 4);

echo $x . "<br>";


function testeRetorno() {

    return "Teste1";

}

$j = testeRetorno();

echo $j;