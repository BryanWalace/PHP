<?php

$ano_atual = date("Y"); //Obtém o ano atual automaticamente

echo "Digite o ano de seu nascimento: ";
$ano_nasc = readline();


$idade = $ano_atual - $ano_nasc;


if ($idade >= 18) {
    echo "Você está apto(a) a votar este ano.\n";
} else {
    echo "Você não está apto(a) a votar este ano.\n";
}

?>
