<?php

// O JSON vem como uma string
$json = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/paises");

$arquivo = fopen("paises.txt", "w+");

fwrite($arquivo, $json);
fclose($arquivo);

echo "Escrita concluída, " . "<a href=\"paises.txt\">" . "Link para o arquivo." . "</a>";

?>
