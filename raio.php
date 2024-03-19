<?php

echo "Digite o raio do círculo: ";
$raio = readline();

$peri = 2 * M_PI * $raio;
$area = M_PI * pow($raio, 2); //função de calculo potencia, raio elevado a 2

echo "\nCírculo:\n";
echo "Raio: $raio\n";
echo "Perímetro: $peri\n";
echo "Área: $area\n";

?>