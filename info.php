<?php

echo "Digite o primeiro número: ";
$numero1 = readline();

echo "Digite o segundo número: ";
$numero2 = readline();

$soma = $numero1 + $numero2;
$sub = $numero1 - $numero2;
$mult = $numero1 * $numero2;
$div = $numero1 / $numero2;
$modulo = abs($numero1 - $numero2);
$restDivi = $numero1 % $numero2;
$expo = $numero1 ** $numero2;
$media = ($numero1 + $numero2) / 2;
$raizQuadradaSoma = sqrt($numero1 + $numero2);

echo "\nInfo dos números:\n";
echo "Primeiro número: $numero1\n";
echo "Segundo número: $numero2\n\n";

echo "Resultado operações:\n";
echo "Soma: $soma\n";
echo "Subtração: $subtracao\n";
echo "Multiplicação: $multiplicacao\n";
echo "Divisão: $divisao\n";
echo "Módulo do sinal da subtração: $modulo\n";
echo "Resto da divisão: $restoDivisao\n";
echo "Exponenciação: $exponenciacao\n";
echo "Média: $media\n";
echo "Raiz quadrada da soma: $raizQuadradaSoma\n";

?>