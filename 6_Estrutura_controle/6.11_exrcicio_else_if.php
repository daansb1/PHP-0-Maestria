<?php


 // Controle de velocidade (Pardal);

 $velociade = 200;

 if ( $velociade < 40 ) {
     echo "Você esta na velocidade correta. <br>";
 } else if ( $velociade == 40) {
    echo "Tome cuidado !<br>";
 }else {
     echo "Você ultrapassou a velocidade permitida";
 }