<?php

echo "Digite um número: ";
$numero = readline();

if ($numero % 2 == 0) {
    echo " O número é par.\n";
} else {
    echo "O número é ímpar.\n";
}

if ($numero % 2 == 0) {
    echo "UO número é par.\n";
} elseif ($numero != 0) {
    echo "O número é ímpar.\n";
} else {
    echo "O número é zero.\n";
}

switch ($numero % 2) {
    case 0:
        echo "O número é par.\n";
        break;
    case 1:
        echo "O número é ímpar.\n";
        break;
}

echo match ($numero % 2) {
    0 => "O número é par.\n",
    1 => "O número é ímpar.\n",
};

?>
