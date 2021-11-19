<?php

class DespesaMes {
    private int $mes;
    private float $valor;

    public function __construct(int $mes, float $valor)
    {
        $this->mes = $mes;
        $this->valor = $valor;
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function getMes(): int {
        return $this->mes;
    }
}

class DespesaDia extends DespesaMes {
    private int $dia;

    public function __construct(int $dia, int $mes, float $valor)
    {
        parent::__construct($mes, $valor);
        $this->dia = $dia;
    }

    public function getDia(): int {
        return $this->dia;
    }
}

class DespesasIndividuo {
    private string $cpf;
    private array $despesasDia;
    private array $despesasMes;

    public function __construct(string $cpf, array $despesas)
    {
        $this->cpf = $cpf;
        foreach ($despesas as $despesa) {
            if ($despesa instanceof DespesaDia) {
                $despesasDia[] = $despesa;
            } else if ($despesa instanceof DespesaMes) {
                $despesasMes[] = $despesa;
            }
        }        
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function totalizaMes(int $mes): DespesaMes {
        $somatorio = 0;

        foreach ($this->despesasMes as $mes) {
            if ($mes->getMes() === $mes) {
                $somatorio += $mes->getValor();
            }
        }

        return new DespesaMes($mes, $somatorio);
    }
}

?>

