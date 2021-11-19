<?php

require('autoload.php');

interface Perecivel {
    public function estaVencido(): bool;
}

abstract class Produto {
    private int $codigo;
    private float $preco;

    public function __construct(int $codigo, float $preco)
    {
        $this->codigo = $codigo;
        $this->preco = $preco;
    }
}

class DVD extends Produto {
    private string $titulo;
    private string $ano;

    public function __construct(int $codigo, float $preco, string $titulo, string $ano)
    {
        if ($codigo == null || $preco == null || $titulo == null || $ano == null) {
            return new InformacaoNulaException("Parâmetro nulo");
        }

        parent::__construct($codigo, $preco);
        $this->titulo = $titulo;
        $this->ano = $ano;
    }

    public function getAno(): string {
        return $this->ano;
    }
}

class Leite extends Produto implements Perecivel {
    private string $marca;
    private float $volume;
    private DateTime $data;

    public function __construct(int $codigo, float $preco, string $marca, float $volume, DateTime $data)
    {
        if ($codigo == null || $preco == null || $marca == null || $volume == null || $data == null) {
            return new InformacaoNulaException("Parâmetro nulo");
        }

        parent::__construct($codigo, $preco);
        $this->marca = $marca;
        $this->volume = $volume;
        $this->data = $data;
    }

    public function estaVencido(): bool {
        return time() > $this->data->getTimestamp();
    }
}

class InformacaoNulaException extends Exception {
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

$estoque = [];

$estoque[1] = new DVD(1,29.99,'titulo dvd 1', '2021');
$estoque[2] = new DVD(2,29.99,'titulo dvd 2', '2021');
$estoque[3] = new DVD(3,29.99,'titulo dvd 3', '2021');
$estoque[4] = new DVD(4,29.99,'titulo dvd 4', '2021');

$estoque[5] = new Leite(5, 5.99, 'marca de leite 5', 1.5, new DateTime('now'));
$estoque[6] = new Leite(6, 5.99, 'marca de leite 6', 1.5, new DateTime('now'));
$estoque[7] = new Leite(7, 5.99, 'marca de leite 7', 1.5, new DateTime('now'));
$estoque[8] = new Leite(8, 5.99, 'marca de leite 8', 1.5, new DateTime('now'));
$estoque[9] = new Leite(9, 5.99, 'marca de leite 9', 1.5, new DateTime('now'));

foreach ($estoque as $key => $produto) {
    if ($produto instanceof Leite) {
        if ($produto->estaVencido()) echo "Leite {$key} está vencido<br>";
        else echo "Leite {$key} não está vencido<br>";
    } else if ($produto instanceof DVD) {
        $ano = $produto->getAno();
        echo "Ano do DVD {$key} = {$ano}<br>";
    }
    
}

?>
