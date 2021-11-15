<?php

require_once('exercicio61.php');
require_once('exercicio62.php');

$nota = new Nota(1,"Mouse", "Mouse Gamer", 199.99, 19.99, 5);

print_r($nota);
echo $nota->calcularFatura();

$plano1 = new Plano(4, 5);
$plano2 = new Plano(6, 7);

echo "<br>";
print($plano1);
echo "<br>";
print($plano2);
echo "<br>";
$plano1->setPonto($plano2);
print($plano1);
echo "<br>";
?>
