<?php

$clientes = array("Joaquim" => "28,m", "Maria" => "41,f", "Pedro" => "18,m", "Joana Silva" => "58,f", "João Lopes" =>
"21,m", "Joana" => "15,f", "Fernanda" => "25,f");

$homens = [];
$mulheres = [];

foreach ($clientes as $nome => $valor) {
    $idade = explode(',', $valor)[0];
    $sexo = explode(',', $valor)[1];

    if (strtolower($sexo) == 'f') {
        $mulheres[$nome] = $idade;
    } else {
        $homens[$nome] = $idade;
    }
}
echo "<pre>";
print("Homens: ");
print_r($homens);
print("Mulheres: ");
print_r($mulheres);
echo "</pre>";

?>
