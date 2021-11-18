<?php

$x = 10 ;

echo "$x Global <br>";

function local(){
    $x = 5;

    echo"$x Local <br>";
}

local();