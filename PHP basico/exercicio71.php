<?php

class Correntista {
    private string $cpfCliente;
    private float $saldo;

    public function __construct(string $cpfCliente, float $saldo) {
        $this->cpfCliente = $cpfCliente;        
        $this->saldo = $saldo;        
    }

    public function getCpfCliente(): string {
        return $this->cpfCliente;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function setSaldo(float $saldo) {
        $this->saldo = $saldo;
    }
}

?>
