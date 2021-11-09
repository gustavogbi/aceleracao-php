<?php

function escreveNome($nome) {
    if (is_null($nome) or $nome === "") throw new Exception("Nome eh vazio ou nulo");
    echo $nome;
}

try {
    escreveNome("Gustavo<br>");
    escreveNome("");
} catch (Exception $e) {
    echo json_encode(array(
        'mensagem' => $e->getMessage(),
        'codigo' => $e->getCode()
    ));
}
finally {
    echo "<br>Rodou tudo<br>";
}

?>
