<?php

$pessoa = [
    'nome' => 'Bruno',
    'sobrenome' =>  'Bento',
    'idade' => 18,
    'altura' => 170,
    'sexo' => 'Masculino'
];

print_r ($pessoa);

echo "<br>";

if ($pessoa['idade'] >= 18) {
    echo "É maior de idade";
} else {
    echo "Menor de idade";
}