<?php

$a = 20;
$b = 26;
$d = "Daniel";


if (is_int($a) || is_float($b)){
    $z = $a * 2;
    echo "É um numero $z <br>";

    if ($z > 100){
        echo "É maior que 100 <br>";
    }else{
        echo "Não é maior que 100 <br>";
    }
}else{
    echo "Não é numerico <br>";
}


if (is_numeric($a)){
    $z = $a * 2;
    echo "É um numero $z <br>";

    if ($z > 100){
        echo "É maior que 100 <br>";
    }else{
        echo "Não é maior que 100 <br>";
    }
}else{
    echo "Não é numerico <br>";
}

if (is_numeric($d)){
    $z = $a * 2;
    echo "É um numero $z <br>";

    if ($z > 100){
        echo "É maior que 100 <br>";
    }else{
        echo "Não é maior que 100 <br>";
    }
}else{
    echo "Não é numerico <br>";
}