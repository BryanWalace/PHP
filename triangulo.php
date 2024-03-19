<?php

echo "Digite o primeiro lado do triângulo: ";
$lado1 = readline();

echo "Digite o segundo lado do triângulo: ";
$lado2 = readline();

echo "Digite o terceiro lado do triângulo: ";
$lado3 = readline();


if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {

    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "O triângulo é equilátero.\n"; // Todos os lados iguais
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "O triângulo é isósceles.\n"; // Dois lados são iguais
    } else {
        echo "O triângulo é escaleno.\n"; // Todos os lados diferentes
    }
} else {
    echo "Os comprimentos fornecidos não formam um triângulo.\n";
}

?>
