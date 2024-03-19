<?php

$a = (int)readline("Digite o valor de A: ");
$b = (int)readline("Digite o valor de B: ");
$c = (int)readline("Digite o valor de C: ");

//is_int função que verifica se é inteiro int retornando true or false
// O operador ! nega o valor de uma expressão booleana. Ele transforma true em false e false em true.

if (!is_int($a) || $a <= 0 || !is_int($b) || $b <= 0 || !is_int($c) || $c <= 0) {
  echo "Erro: Valores de A, B e C devem ser números inteiros.";
  exit;
}

$result = ((($a + $b) * ($a + $b)) + (($b + $c) * ($b + $c))) / (2 * sqrt($a * $b * $c));

echo "O resultado da expressão é: " . number_format($resultado, 2, '.', ',') . "\n";

?>