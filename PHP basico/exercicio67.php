<?php

require_once('exercicio66.php');

class Atendente extends Pessoa{
    private $id;
    private $funcao;
    private $horarioDeEntrada;
    private $horarioDeSaida;

    public function __construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao, $id, $funcao, $horarioDeEntrada, $horarioDeSaida)
    {
        parent::__construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
        $this->nome = $id;
        $this->funcao = $funcao;
        $this->horarioDeEntrada = $horarioDeEntrada;
        $this->horarioDeSaida = $horarioDeSaida;
    }

    public function getId() {
        return $this->id;
    }
    public function getFuncao() {
        return $this->funcao;
    }
    public function getHorarioDeEntrada() {
        return $this->horarioDeEntrada;
    }
    public function getHorarioDeSaida() {
        return $this->horarioDeSaida;
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
            "horarioDeSaida" => $this->horarioDeSaida
        ));
    }

}

$atendente1 = new Atendente("fulano", '00000000000', 'rua tal', 'jao', 'maria', '000', '001', 1, 'funcao', '08:00', '18:00');
$atendente2 = new Atendente("ciclano", '00000000000', 'rua tal', 'jao', 'maria', '000', '002', 2, 'funcao', '08:00', '18:00');

echo "<pre>";
print($atendente1->__toString() . '<br>');
print($atendente2->__toString() . '<br>');
var_dump($atendente1);
var_dump($atendente2);
echo "</pre>";

// print('[');
// print($atendente1);
// print(',');
// print($atendente2);
// print(']');
?>
