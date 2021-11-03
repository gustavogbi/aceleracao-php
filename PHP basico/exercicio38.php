<?php

$grau1 = 78.3;
$grau2 = 98.4;

function fahrenheitParaCelsius($grau) {
    return number_format(($grau - 32) * 5/9, 1);
}

$temperaturaEmGrausCelsius = fahrenheitParaCelsius($grau1);
echo "{$grau1}°F = {$temperaturaEmGrausCelsius}°C" . "<br><br>";

$temperaturaEmGrausCelsius = fahrenheitParaCelsius($grau2);
echo "{$grau2}°F = {$temperaturaEmGrausCelsius}°C";

?>