<?php

//pow() expoente calculo
//sqrt() raiz quadrada


$x = 3;

$equa1 = (2 * pow($x, 2)) - (3 * pow($x, ($x + 1))) / (2 * $x) + sqrt($x + 1) / 4;

$equa2 = sqrt(4 * $x + pow(2, $x));

$z = $equa1 / $equa2;

// number_format() usado para definir a quant de casa decimais e o numero, exemplo o 2 define a quantidade de casas
echo "O valor de Z é: " . number_format($z, 2) . "\n";

?>