<?php

$nome = "Daniel";

// CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO
for( $i = 0; $i < 20; $i++){

    if ($i == 9){
        echo "$nome <br>";
        continue;
    }


    echo "$i<br>";
}