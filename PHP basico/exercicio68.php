<?php

require_once('exercicio66.php');

class Secretaria extends Pessoa {
    private $id;
    private $funcao;
    private $horaTrabalhada;
    private $horasExtras;

    public function __construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao, $id, $funcao, $horaTrabalhada, $horasExtras)
    {
        parent::__construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
        $this->nome = $id;
        $this->funcao = $funcao;
        $this->horaTrabalhada = $horaTrabalhada;
        $this->horasExtras = $horasExtras;
    }

    public function getId() {
        return $this->id;
    }
    public function getFuncao() {
        return $this->funcao;
    }
    public function getHoraTrabalhada() {
        return $this->horaTrabalhada;
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
            "horaTrabalhada" => $this->horaTrabalhada,
            "horasExtras" => $this->horasExtras
        ));
    }
}

$secretaria1 = new Secretaria("fulano", '00000000000', 'rua tal', 'jao', 'maria', '000', '001', 1, 'funcao', 8, 1);
$secretaria2 = new Secretaria("ciclano", '00000000000', 'rua tal', 'jao', 'maria', '000', '002', 2, 'funcao', 8, 1);

echo "<pre>";
print($secretaria1->__toString() . '<br>');
print($secretaria2->__toString() . '<br>');
var_dump($secretaria1);
var_dump($secretaria2);
echo "</pre>";

// print('[');
// print($Secretaria1);
// print(',');
// print($Secretaria2);
// print(']');
?>
