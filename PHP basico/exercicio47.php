<?php

$json = file_get_contents('https://random-data-api.com/api/business_credit_card/random_card');
$arquivo = fopen("cartao.txt", "w+");

fwrite($arquivo, $json);

fclose($arquivo);

$json = file_get_contents("cartao.txt");

var_export($json);

?>
