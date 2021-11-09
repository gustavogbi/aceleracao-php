<?php

$json = file_get_contents('https://jsonplaceholder.typicode.com/photos');

$arquivo1 = fopen("arquivo1.txt", "w+");
$arquivo2 = fopen("arquivo2.txt", "w+");
$arquivo3 = fopen("arquivo3.txt", "w+");

fwrite($arquivo1, $json);
fwrite($arquivo2, $json);
fwrite($arquivo3, $json);

// apaga arquivo
unlink("arquivo2.txt");

try {
    @fopen("arquivo2.txt", "r");
    throw new Exception("Não foi possível abrir o arquivo2.txt");
} catch (Exception $e) {
    echo "Mensagem do erro: " . $e->getMessage() . "<br>";
} finally {
    $arrayArquivo1 = json_decode(file_get_contents("arquivo1.txt"));
    $arrayArquivo3 = json_decode(file_get_contents("arquivo3.txt"));
    var_export($arrayArquivo1);
    var_export($arrayArquivo3);
}
?>
