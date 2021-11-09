<?php

$urls = array(
    'https://random-data-api.com/api/stripe/random_stripe',
    'https://random-data-api.com/api/stripe/random_stripe',
    'https://random-data-api.com/api/app/random_app',
    'https://random-data-api.com/api/beer/random_beer',
    'https://random-data-api.com/api/commerce/random_commerce',
    'https://random-data-api.com/api/device/random_device',
    'https://random-data-api.com/api/subscription/random_subscription'
);

$arquivo = fopen("api.txt", "w+");

foreach ($urls as $value) {
    $json = file_get_contents($value);
    fwrite($arquivo,$json);
    fwrite($arquivo,"\r\n");
}
fclose($arquivo);

$arquivo = fopen("api.txt", "r");

$arrayDeJson = array();

while($linha = fgets($arquivo)) {
    array_push($arrayDeJson, json_decode($linha));
}

echo "<pre>";
print_r($arrayDeJson);
echo "</pre>";

?>
