<?php

$array1 = array(
    1 => 10,
    2 => 8,
    3 => 5
);

$array2 = array(
    1 => 9,
    2 => 7,
    3 => 4
);

echo "Array 1:<br>";
foreach ($array1 as $key => $value) {
    echo "{$key} => {$value}<br>";
};
echo "<br>";

echo "Array 2:<br>";
foreach ($array2 as $key => $value) {
    echo "{$key} => {$value}<br>";
};
echo "<br>";

$array3 = array_merge($array1, $array2);

var_export($array3);

?>
