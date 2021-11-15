<?php

class Nota {
    private int $id;
    private string $nome;
    private string $descricao;
    private int $quantidade;
    private float $preco;
    private float $desconto;

    public function __construct(int $id, string $nome, string $descricao, float $preco, float $desconto, int $quantidade = 0)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
        $this->desconto = $desconto;
    }

    public function setPreco(float $preco) {
        $this->$preco = $preco;
    }

    public function setDescricao(string $descricao) {
        $this->$descricao = $descricao;
    }

    public function getId() : int{
        return $this->id;
    }

    public function getNome() : string{
        return $this->nome;
    }

    public function getDescricao() : string{
        return $this->descricao;
    }

    public function getQuantidade() : int{
        return $this->quantidade;
    }

    public function getPreco() : float {
        return $this->preco;
    }

    public function getDesconto() : float{
        return $this->desconto;
    }

    public function calcularFatura() : float{
        return $this->quantidade * $this->preco;
    }
}

?>
