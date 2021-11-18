<?php


// Condicao true
if (5 > 2) {
    echo "Deu certo! entrou no if.<br>";
}

// Condicao false
if (2 > 5) {
    echo "Não entra no if, deu false.<br>";
}

// Condicao true
if (10 === 10 && 9 > 3) {
    echo "Entrou no if é true.<br>";
}

// Variáveis 

$a = 10;
$b = 5;

$c = "Deu certo entrou no if. <br>";

if ($a > $b) {
    echo $c;
}