<?php

require_once('exercicio66.php');

class Empregado extends Pessoa{
    private $id;
    private $funcao;
    private $horarioDeEntrada;
    private $horarioDeSaida;
    private $salario;
    private $horasExtras;

    public function __construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao, $id, $funcao,
    $horarioDeEntrada, $horarioDeSaida, $salario, $horasExtras)
    {
        parent::__construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
        $this->id = $id;
        $this->funcao = $funcao;
        $this->horarioDeEntrada = $horarioDeEntrada;
        $this->horarioDeSaida = $horarioDeSaida;
        $this->salario = $salario;
        $this->horasExtras = $horasExtras;
    }

    public function getId() {
        return $this->id;
    }
    public function getFuncao() {
        return $this->funcao;
    }
    public function gethorarioDeEntrada() {
        return $this->horarioDeEntrada;
    }
    public function getHorarioDeSaida() {
        return $this->horarioDeSaida;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function getHorasExtras() {
        return $this->horasExtras;
    }

    public function __toString()
    {
        return json_encode(array(
            "nome" => parent::getNome(),
            "cpf" => parent::getCpf(),
            "endereco" => parent::getEndereco(),
            "nomepai" => parent::getNomePai(),
            "nomemae" => parent::getNomeMae(),
            "rg" => parent::getRg(),
            "serialdeidentificacao" => parent::getSerialDeIdentificacao(),
            "id" => $this->id,
            "funcao" => $this->funcao,
            "horarioDeEntrada" => $this->horarioDeEntrada,
            "horarioDeSaida" => $this->horarioDeSaida,
            "salario" => $this->salario,
            "horasextras" => $this->horasExtras
        ));
    }

}

$empregado1 = new Empregado("fulano", '00000000000', 'rua tal', 'jao', 'maria', '000', '001', 1, 'funcao', '08:00', '18:00', 4000, 300);
$empregado2 = new Empregado("ciclano", '00000000000', 'rua tal', 'jao', 'maria', '000', '002', 2, 'funcao', '08:00', '18:00', 5000, 400);
$empregado3 = new Empregado("beltrano", '00000000000', 'rua tal', 'jao', 'maria', '000', '003', 3, 'funcao', '08:00', '18:00', 6000, 500);

echo "<pre>";
print($empregado1->__toString() . '<br>');
print($empregado2->__toString() . '<br>');
print($empregado3->__toString() . '<br>');
var_dump($empregado1);
var_dump($empregado2);
var_dump($empregado3);
echo "</pre>";

// print('[');
// print($Empregado1);
// print(',');
// print($Empregado2);
// print(']');
?>
