<?php

// função implode para arrays dentro dentro de uma function

function exercicio(){

    $carro = ['Bmw','Mercedes','Porshe','Landal','Ferrari','Porshe KN'];

    $teste =  implode(", ", $carro);

    echo $teste;

}

exercicio();