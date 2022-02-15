<?php

$frase = "carro - navio - helicoptero - barco - jangada";

$fraseExplode = explode("-", $frase);

print_r($fraseExplode);


for ($i = 0; $i < count($fraseExplode); $i++){

    echo $fraseExplode[$i];
    echo "<br>";

}

?>