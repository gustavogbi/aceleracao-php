<?php

$json = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/distritos');
$objeto = json_encode($json);

var_export($objeto);

?>