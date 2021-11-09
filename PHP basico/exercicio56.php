<?php

if (!is_dir("alunos")) mkdir("alunos");
if (!is_dir("professores")) mkdir("professores");

fclose(fopen("alunos/arquivo.txt", "w+"));

$professores = scandir("professores");
$alunos = scandir("alunos");

try {
    if (sizeof($professores) < 3) throw new Exception("O diretório professores não possui nenhum arquivo."); 
    if (sizeof($alunos) < 3) throw new Exception("O diretório alunos não possui nenhum arquivo."); 
} catch (Exception $e) {
    echo "<meta charset=\"UTF-8\">";
    $fileHandler = fopen("log.txt", "w+");
    fwrite($fileHandler, "Mensagem: " . $e->getMessage() . PHP_EOL);
    fwrite($fileHandler, "Código: " . $e->getCode() . PHP_EOL);
    fwrite($fileHandler, "Arquivo: " . $e->getFile() . PHP_EOL);
    fwrite($fileHandler, "Linha: " . $e->getLine() . PHP_EOL);
    fwrite($fileHandler, "Trace: " . $e->getTraceAsString() . PHP_EOL);
    fclose($fileHandler);
    
    echo "<pre>";
    echo file_get_contents("log.txt");
    echo "</pre>";
    
    echo "<br><a href=\"log.txt\">Log</a>";
}

?>
