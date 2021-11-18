<?php

if (3 === 3) {
    echo "Operador idêntico!<br>";
}else{
    echo "Operador não Idêntico<br>";
}


if (3 === "3") {
    echo "Operador idêntico!<br>";
}else{
    echo "Operador não Idêntico<br>";
}


$a = 10.5;
$b = 10;

if ($a === $b) {
    echo "Operador idêntico!<br>";
}else{
    echo "Operador não Idêntico<br>";
}