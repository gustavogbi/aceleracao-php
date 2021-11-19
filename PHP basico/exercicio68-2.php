<?php

interface Animal {
    public function getNomeEspecie(): string;
    public function getNomeAnimal(): string;
}

interface Ferramentas {
    public function filtraEspecie(array $completo, string $especieFiltrar): array;
    public function classificaEspecie(array $completo): array;
}

class Cavalo implements Animal {
    private string $nomeEspecie;
    private string $nomeAnimal;

    public function __construct(string $nomeEspecie, string $nomeAnimal)
    {
        $this->nomeEspecie = $nomeEspecie;
        $this->nomeAnimal = $nomeAnimal;
    }

    function getNomeEspecie(): string {
        return $this->nomeEspecie;
    }

    function getNomeAnimal(): string
    {
        return $this->nomeAnimal;
    }
}

class Ferramenta implements Ferramentas {
    function filtraEspecie(array $completo, string $especieFiltrar): array
    {
        $completoFiltrado = [];
        foreach ($completo as $key => $animal) {
            if ($animal instanceof Animal) {
                if ($animal->getNomeEspecie() === $especieFiltrar) {
                    $completoFiltrado[] = $animal;
                    # array_push($completoFiltrado, $animal);
                }
            }
        }
        return $completoFiltrado;
    }

    function classificaEspecie(array $completo): array
    {
        $especies = [];
        foreach ($completo as $key => $animal) {
            if ($animal instanceof Animal) {
                if (!in_array($animal->getNomeEspecie(), $especies)) {
                    array_push($especies, $animal->getNomeEspecie());
                }
            }
        }

        return $especies;
    }
}

class Resultado {
    private string $nomeEspecie;
    private int $quantidade;

    function getNomeEspecie(): string {
        return $this->nomeEspecie;
    }

    function getQuantidade() {
        return $this->quantidade;
    }
}

$cavalo1 = new Cavalo('mustang', 'pé de pano');
$cavalo2 = new Cavalo('quarto de milha', 'cavalo branco do napoleão');

$arrayDeAnimais = [$cavalo1, $cavalo2, $cavalo1, $cavalo2];

echo '<pre>';
print_r($arrayDeAnimais);
echo '</pre>';

$ferramenta = New Ferramenta();

$especies = $ferramenta->classificaEspecie($arrayDeAnimais);

echo '<pre>';
print_r($especies);
echo '</pre>';

$cavalosMustang = $ferramenta->filtraEspecie($arrayDeAnimais, 'mustang');

echo '<pre>';
print_r($cavalosMustang);
echo '</pre>';

?>
