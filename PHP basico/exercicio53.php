<?php

$n1 = array(
    "Gustavo" => 5,
    "Fulano" => 6,
    "Ciclano" => 10
);
$n2 = array(
    "Gustavo" => 8,
    "Fulano" => 2,
    "Ciclano" => 10
);

function passou($n1, $n2) : bool {
    if ($n1 > 7 and $n2 > 7 and $n1 + $n2 > 19) return true;
    return false;
}

$arquivo = fopen("aluno-aprovados.txt", "w+");

if (passou($n1['Gustavo'], $n2['Gustavo'])) {
    fwrite($arquivo, "Gustavo" . PHP_EOL);
}
if (passou($n1['Fulano'], $n2['Fulano'])) {
    fwrite($arquivo, "Fulano" . PHP_EOL);
}
if (passou($n1['Ciclano'], $n2['Ciclano'])) {
    fwrite($arquivo, "Ciclano" . PHP_EOL);
}

fclose($arquivo);

echo "<a href=\"aluno-aprovados.txt\">aluno-aprovados.txt</a>";

?>
