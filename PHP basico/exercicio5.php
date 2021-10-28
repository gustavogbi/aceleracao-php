<?php

function somaMultiplica($numero1, $numero2) {
    return ($numero1 + $numero2) * $numero1;
}

$numero1 = 2;
$numero2 = 4;

$resultado = somaMultiplica($numero1, $numero2);

echo "{$numero1} + {$numero2} x {$numero1} = {$resultado}" ;

?>
