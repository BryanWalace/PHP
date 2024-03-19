<?php 

$a = 2;
$b = 4;
$c = 6;
$m = (($c + $b) / 2) ** (--$c);
$t = --$c ** ($b + $a);
$x = --$c + $b;
$y = $b++ + $a;
$z = $a - $b--;

echo "Valores das variáveis:\n";
echo "Valor de A: $a\n";
echo "Valor de B: $b\n";
echo "Valor de C: $c\n";
echo "Valor de M: $m\n";
echo "Valor de T: $t\n";
echo "Valor de X: $x\n";
echo "Valor de Y: $y\n";
echo "Valor de Z: $z\n";

$a = (double)$a;
$b = (double)$b;
$c = (string)$c;

echo "\nValores capós converção:\n";
echo "Valor de A (double): $a\n";
echo "Valor de B (double): $b\n";
echo "Valor de C (string): $c\n";

?>