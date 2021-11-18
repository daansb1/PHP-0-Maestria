<?php

$a = 26;
$b = "Daniel";
$c = 1.70;
$d = true;

if  (is_int($a)){
    echo "É um inteiro 1 <br>";
}else{
    echo "Não é um inteiro 1<br>";
}

if  (is_string($b)){
    echo "É uma string 2<br>";
}else{
    echo "Não é um inteiro 2<br>";
}

if  (is_float($c)){
    echo "É um float <br>";
}else{
    echo "Não é um float 3<br>";
}

if  (is_bool($d)){
    echo "É um booleano <br>";
}else{
    echo "Não é um booleano 3<br>";
}