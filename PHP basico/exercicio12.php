<?php
$array = array(12,62,45,82,36,45,12,98,12,45,71,66,33,95,25,14);
$somatorio = 0;
foreach ($array as $key => $value) {
    $somatorio += $value;
}
$media = $somatorio / sizeof($array);
var_export($array);
echo "<br>";
var_dump($array);
echo "<br>";
print_r($array);
echo "<br>";
print("Média: " . $media . "<br>");
?>
