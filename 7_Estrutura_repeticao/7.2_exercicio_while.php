<?php

$arr = ["Daniel",26,1.70,"Masculino",true,false,[], 5,10];

 $x = count($arr);
 $y = 0;

while ($y < $x){
    
    if (is_string($arr[$y])) {
        echo $arr[$y] . "<br>";
    }

    $y++;

}
