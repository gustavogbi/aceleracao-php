<?php

$array1 = array(
    "Curso" => "PHP",
    "Curso" => "Java",
    "Curso" => "Python",
);
$array2 = array(
    "Pessoa" => "Joao",
    "Pessoa" => "Pedro",
    "Pessoa" => "Clara",
);
$array3 = array(
    "Loja" => "Centro",
    "Loja" => "Zona Sul",
    "Loja" => "Zona Oeste",
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

echo "Array 3:<br>";
foreach ($array3 as $key => $value) {
    echo "{$key} => {$value}<br>";
};
echo "<br>";

?>
