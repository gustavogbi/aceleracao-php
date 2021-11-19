<?php

function metodo(array $correntistas) {
    $correntistasDespesas = [];

    foreach ($correntistas as $correntista) {
        if ($correntista->getMes() === 3) {
            if($correntista->getSaldo() <= $correntista->getDespesasPrevistas()) {
                $correntistasDespesas[] = $correntista;
            }
        }
    }

    return $correntistasDespesas;
}

?>

