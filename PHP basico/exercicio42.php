<?php

$arquivoDeEntrada = file_get_contents("paises.txt");
$arquivoDeSaida = fopen("lista.csv", "w");

fwrite($arquivoDeSaida, "ISO-ALPHA-2,ISO-ALPHA-3,nome,sub-regiao,continente");

if ($arquivoDeEntrada) {
    $arrayJson = json_decode($arquivoDeEntrada, true);
    var_dump($arrayJson[0]);
    foreach ($arrayJson as $valor) {
        fwrite($arquivoDeSaida, $valor['id']['ISO-ALPHA-2']);
        fwrite($arquivoDeSaida, ",");
        fwrite($arquivoDeSaida, $valor['id']['ISO-ALPHA-3']);
        fwrite($arquivoDeSaida, ",");
        fwrite($arquivoDeSaida, $valor['sub-regiao']['nome']);
        fwrite($arquivoDeSaida, ",");
        fwrite($arquivoDeSaida, $valor['sub-regiao']['regiao']['nome']);
        fwrite($arquivoDeSaida, "\r\n");
    }
}

fclose($arquivoDeSaida);

echo "Escrita concluída, " . "<a href=\"lista.csv\">" . "Link para o arquivo." . "</a>";

?>
