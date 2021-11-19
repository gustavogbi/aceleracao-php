<?php

require_once('exercicio71.php');

interface MovimentaConta {
    public function getCPFCorrentista(): string;
    public function getValorMovimento(): float;
}

interface OperacoesBanco {
    public function encontraCorrentista(array $todosCorrentistas, string $cpfProcurado): Correntista;
}

function metodo(array $c, array $m, $operacoesBanco) {
    foreach ($c as $correntista)
        foreach ($m as $movimentacao)
            if ($correntista->getCpfCliente() === $movimentacao->getCPFCorrentista())
                $correntista->setSaldo($movimentacao->getValorMovimento());
}


?>
