<?php

$nomes = ["Nome1", "Nome2", "Nome3", "Nome4", "Nome5", "Nome6", "Nome7", "Nome8", "Nome9", "Nome10", "Nome11", "Nome12",
"Nome13", "Nome14", "Nome15"];

foreach ($nomes as $nome) {
    echo "Tentando criar o diretório {$nome}...<br>";
    $criouDiretorio = mkdir($nome);
    if ($criouDiretorio) {
        echo "Diretório criado.<br>";
        
        echo "Criando arquivo {$nome}.txt...<br>";
        
        $arquivo = fopen("{$nome}/{$nome}.txt", "w+");
        fwrite($arquivo, "{$nome}");
        fclose($arquivo);

        echo "Arquivo criado.<br>";
    }
    else {
        echo "Não foi possível criar o diretório {$nome}, já existe um diretório com este nome.<br>";
    }
    echo "<br>";
}

?>
