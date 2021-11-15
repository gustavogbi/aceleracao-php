<?php

interface Servicos {
    public function calculaSalario(int $diasTrabalhados, String $cargo):float;
    public function calculaSalarioMaisGratificacao(int $diasTrabalhados, string $valorGravacao);
}

class Funcionarios implements Servicos {
    private static $salarioPadrao = 6500;

    public function calculaSalario(int $diasTrabalhados, string $cargo): float
    {
        $salarioDiario = round(self::$salarioPadrao / 30, 2);
        if ($diasTrabalhados >= 15) {
            echo "Salário completo, valor recebido por dia = {$salarioDiario}<br>";
            return $salarioDiario;
        }

        $salarioDiarioComDesconto = round($salarioDiario * 0.7, 2);
        echo "Salário com desconto, valor recebido por dia = {$salarioDiarioComDesconto}<br>";
        return $salarioDiarioComDesconto;
    }

    public function calculaSalarioMaisGratificacao(int $diasTrabalhados, string $valorGravacao)
    {
        $salarioPadrao = 4970;
        $salarioDiario = $salarioPadrao / 30;
        $porcentagem = 10;
        if ($diasTrabalhados === 9) {
            $salarioDiario = round($salarioDiario * 1.2, 2);
            echo "Salário completo +20%<br>Recebido {$salarioDiario} por dia<br>";
        } else if ($diasTrabalhados >= 10 && $diasTrabalhados <= 15) {
            $salarioDiario = round($salarioDiario * 1.5, 2);
            echo "Salário completo<br>Recebido {$salarioDiario} por dia<br>";
        }
    }
}

$funcionarios = new Funcionarios();

$funcionarios->calculaSalario(15, "Professor");
$funcionarios->calculaSalario(10, "Professor");

$funcionarios->calculaSalarioMaisGratificacao(9, "");
$funcionarios->calculaSalarioMaisGratificacao(14, "");

?>
