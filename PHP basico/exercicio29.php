<?php

$json = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes');
$objeto = json_decode($json);

var_export($objeto);

?>
