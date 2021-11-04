<?php

$arquivo = fopen("dados.txt", "w+");
for ($i=2; $i <= 700; $i += 2) { 
    fwrite($arquivo, strval($i) . "\r\n");
    echo "Escrevendo {$i}..." . "<br>";
}
fclose($arquivo);
echo "Escrita concluída, arquivo fechado.<br>";
echo "<a href=\"dados.txt\">" . "Link para o arquivo" . "</a>";


?>