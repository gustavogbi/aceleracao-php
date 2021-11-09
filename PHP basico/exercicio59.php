<?php

function divisao($a, $b) {
    if ($b === 0) throw new Exception("Divisão por 0", 523);
    return $a / $b;
}

try {
    echo divisao(4,2);
    echo divisao(4,0);
} catch (Exception $e) {
    echo json_encode(array(
        'mensagem' => $e->getMessage(),
        'codigo' => $e->getCode()
    ));
}


?>