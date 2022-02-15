<?php

$str = "Com o strpos encontramos uma string";

$testeEncontrar = strpos($str, "string");

echo "$testeEncontrar <br>";

$str2 = "Com o strpos encontramos uma string";

$testeEncontrar2 = strpos($str2, "Java");

echo "$testeEncontrar2 <br>";

if ($testeEncontrar2 === false){
    echo "Palavra não encontrada <br>";
}

$palavra = "com";

$testeEncontrar3 = strpos($str, $palavra);

echo "$testeEncontrar3 <br>";

$palavra2 = "to";

$testeEncontrar4 = strpos($str, $palavra2);

echo "$testeEncontrar4 <br>";


?>