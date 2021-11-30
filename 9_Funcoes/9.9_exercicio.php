<?php

function arraydados(){

    $a = [1,2,3,4,5,6,7,8,9,10];
    $b = [11,12,13,14,15,16,17];

  $z =   implode(",", $b);

  return $z;

}

echo arraydados();