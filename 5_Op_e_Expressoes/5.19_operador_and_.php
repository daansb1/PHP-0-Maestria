<?php

$a = 10;
$b = 4;
$c = 12;
$d = 12;

if($a > $b && $c == $d){
    echo "Amigo estou aqui 1 !<br>";
}

if($b <= $a && $c >= $d){
    echo "Amigo estou aqui 2 !<br>";
}

if($b === $a && $c > $d){
    echo "Amigo estou aqui 3 !<br>";
}

if(($b <= $a && $c >= $d) && $a > $a){
    echo "Amigo estou aqui 4 !<br>";
}

if($a > $b && $b > $a){
    echo "Amigo estou aqui 5 !<br>";
}