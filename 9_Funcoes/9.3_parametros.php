<?php

function velocidade($vel){

    echo "O limite máximo de velocidade é $vel Km/H <br>";

}

velocidade(200);
velocidade(300);
velocidade(400);



function radar($rad){

    echo "Não ultrapasse o limite do radar de $rad km/h <br>";

}

$velocit = 250;

radar($velocit);



function doisparametros($nome, $sobrenome, $horas){

    echo "Boa tarde $nome  $sobrenome sua consulta está agendado para $horas Horas/Minutos.";

}

$nome = "Daniel";
$sobrenome = "Bento";
//$horas = "19:13";
$hora2 = time();

doisparametros($nome, $sobrenome, "19:16");