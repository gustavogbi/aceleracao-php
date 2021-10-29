<?php

require_once('funcoes.php');

echo "2 + 2 = " . soma(2, 2) . "<br><br>";

echo "5 é " . verificaParOuImpar(5) . "<br><br>";
echo "6 é " . verificaParOuImpar(6) . "<br><br>";


$frase = "quantos caracteres tem esta frase?";
echo "{$frase} " . contaCaracteres($frase) . "<br><br>";

?>
