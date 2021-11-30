<?php

$a = 10;

$b = 15;

function escopo(){

$a = 5;

global $b;


echo "Escopo local de A $a <br>";

echo "Escopo Global na função de B $b <br>";

}

escopo();