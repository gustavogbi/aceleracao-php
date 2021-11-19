<?php

class Usuario {
    private string $nome;
    private string $cpf;
    private string $telefone;
    private string $matricula;
}

class Emprestimo {
    private string $dataDeEmprestimo;
    private string $dataPrevistaDeDevolucao;
    private string $dataDeEntregaReal;
    private int $situacao;
    private Usuario $usuario;
    private Exemplar $exemplar;
}

class Exemplar {
    private int $codigo;
    private bool $cativa;
    private bool $emprestada;
    private Livro $livro;
}

class Livro {
    private string $titulo;
    private string $autor;
    private string $data;
    private string $edicao;
    private string $editora;
    private string $ISBN;
}

?>

