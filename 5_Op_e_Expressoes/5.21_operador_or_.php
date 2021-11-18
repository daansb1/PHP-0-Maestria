<?php

$a = 10;
$b = 20;
$c = 30;
$d = 40;


if ($a > $b || $d > $c) {
    echo "A operação 1 é verdadeira <br>";
}

if ($a > $b || $d > $c && $c < $d) {
    echo "A operação 1 é verdadeira 2 <br>";
}

if (($a > $b || $d < $c) || $c < $d) {
    echo "A operação 1 é verdadeira 3 <br>";
}