<?php

$ceps = ["64053670", "69314386", "63908042", "83305040", "75526370", "69920187", "49044436", "86605574", "79022281",
"40352417", "56321000", "64079070", "27288220", "55641674", "57312380"];
$respostas = [];

foreach ($ceps as $cep) {
    $link = "https://viacep.com.br/ws/{$cep}/json/";
    
    // inicializar o curl
    $curlHandle = curl_init($link);

    // setar opções da requisição
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);

    // tratando resposta
    $resposta = curl_exec($curlHandle);

    // fecha o handler
    curl_close($curlHandle);

    $jsonToArray = json_decode($resposta, true);

    array_push($respostas, $jsonToArray);
}


print(json_encode($respostas));


$arquivo = fopen("ceps.txt", "w+");

fwrite($arquivo, json_encode($respostas));
fclose($arquivo);


?>
