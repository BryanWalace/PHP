<?php


echo "Digite um número: ";
$numero = readline();


echo "Escolha a operação:\n";
echo "1. Dobro\n";
echo "2. Cubo\n";
echo "3. Raiz Quadrada\n";
$operacao = readline();


switch ($operacao) {
    case 1:
        $resultado = $numero * 2; // Dobro
        break;
    case 2:
        $resultado = $numero ** 3; // Cubo
        break;
    case 3:
        $resultado = sqrt($numero); // Raiz
        break;
    default:
        echo "Opção inválida.\n";
        exit;
}

echo "O resultado é: $resultado\n";

?>
