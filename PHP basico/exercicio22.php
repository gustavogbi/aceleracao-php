<?php
$array1 = array(1,2,3,4,5);
$array2 = array(6,7,8,9,10);
$array3 = array(11,12,13,14,15);
$array4 = array(16,17,18,19,20);
$array5 = array(21,22,23,24,25);

foreach ($array1 as $key => $value) {
    echo "{$key} => {$value}<br>";
}
echo "<br>";

foreach ($array2 as $key => $value) {
    echo "{$key} => {$value}<br>";
}
echo "<br>";

foreach ($array3 as $key => $value) {
    echo "{$key} => {$value}<br>";
}
echo "<br>";

foreach ($array4 as $key => $value) {
    echo "{$key} => {$value}<br>";
}
echo "<br>";

foreach ($array5 as $key => $value) {
    echo "{$key} => {$value}<br>";
}
echo "<br>";

var_export($array1);
print("<br>");
var_export($array2);
print("<br>");
var_export($array3);
print("<br>");
var_export($array4);
print("<br>");
var_export($array5);
print("<br>");
?>
