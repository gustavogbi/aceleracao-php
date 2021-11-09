<?php

$array1 = array(1,5,6,3,2,7,8,9,6,3,2,4,5,6,3,2,1,2,5,2);
$array2 = array(-5,-6,-3,-2,-1,-4,-7,-8,-9,-6,-5,-2,-1,-4,-2,-5,-1,-2,-5,-4);

function soma($a, $b) {
    if ($a + $b < 0) return 0;
    return $a + $b;
}

$resultados = [];
for ($i=0; $i < 20; $i++) { 
    $resultados[$i] = soma($array1[$i], $array2[$i]);
}

$arquivo = fopen("arrays.txt", "w+");
for ($i=0; $i < 20; $i++) { 
    fwrite($arquivo, $array1[$i] . " + " . $array2[$i] . " = " . $resultados[$i] . PHP_EOL);
}
fclose($arquivo);

echo "<a href=\"arrays.txt\">arrays.txt</a>";

?>
