<?php

//Versão alternativa para salvar apenas o nome dos países

$json = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/paises");
$arrayJson = json_decode($json, true);

$arquivo = fopen("paises.txt", "w+");

foreach ($arrayJson as $valor) {
    echo "Escrevendo " . $valor['nome'] . "...<br>";
    fwrite($arquivo, $valor['nome'] . "\r\n");
}

fclose($arquivo);

echo "Escrita concluída, arquivo fechado.<br>";
echo "<a href=\"paises.txt\">" . "Link para o arquivo" . "</a>";

?>
