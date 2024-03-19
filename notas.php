<?php

echo "Digite a nota 1: ";
$nota1 = readline();

echo "Digite a nota 2: ";
$nota2 = readline();

echo "Digite a nota 3: ";
$nota3 = readline();

$media = ($nota1 + $nota2 + $nota3) / 3;

$tipo_media = gettype($media);

if ($media < 4.0) {
    echo "Aluno reprovado\n";
} elseif ($media >= 4.0 && $media < 6.0) {
    echo "Aluno aguardando prova substitutiva\n";
} elseif ($media >= 6.0 && $media < 9.9) {
    echo "Aluno aprovado\n";
} elseif ($media === 10.0) {
    echo "Aluno aprovado sem dificuldades\n";
}

echo "O tipo da variável referente à média é: $tipo_media\n";

?>
