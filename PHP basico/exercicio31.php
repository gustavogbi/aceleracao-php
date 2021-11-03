<?php

$json = file_get_contents('https://rickandmortyapi.com/api');

$objeto = json_decode($json, true);

if (is_null($objeto)) echo "Você não pode continuar";
else if (is_array($objeto)) var_dump($objeto);
else echo "O tipo de dado não é um array";

echo "<br>";
var_export($objeto);
?>
