<?php

function teste ($a = "teste") {

    echo "O valor de A é: $a <br>";

}

teste();
teste("asd");

function testando ($b, $a = "Teste"){

    echo "O valor de a é: $a e e b é: $b <br>";

}

testando("1");
testando("1", "2");
