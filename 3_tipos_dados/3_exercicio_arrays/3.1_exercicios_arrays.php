<?php

$arr  = [
    'marca' => 'Gol',
    'modelo' => 'Volkswagem',
    'Quilometragem' => 1000,
    'teto_solar' => true,
    'cor' => 'Azul'
];

print_r($arr['marca']);
echo "<br>";
print_r($arr['Quilometragem']);
echo "<br>";

$marca = $arr['marca'];
$modelo = $arr['modelo'];

echo "O carro é da Marca $marca e de Modelo $modelo";