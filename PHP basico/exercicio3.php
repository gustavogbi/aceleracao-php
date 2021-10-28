<?php

$notas = array(
    1 => 10,
    2 => 8,
    3 => 5
);

$somatorio = 0;
foreach ($notas as $key => $value) {
    $somatorio += $value;
}
$media = $somatorio / sizeof($notas);


echo "Média: {$media}<br>";
var_dump($media);
?>
