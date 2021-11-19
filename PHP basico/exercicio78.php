<?php

namespace exercicio78;

class Biblioteca {
    private array $usuarios;
    private array $itens;
    private array $emprestimos;
    private array $reservas;

    public function emprestar(Usuario $usuario, Livro $livro) {
        $this->usuarios[] = $usuario;
        $this->itens[] = $livro;
        $this->emprestimos[] = new Emprestimo($usuario, $livro);
    }

    public function reservar(Usuario $usuario, Livro $livro) {
        $this->usuarios[] = $usuario;
        $this->itens[] = $livro;
        $this->reservas[] = new Reserva($usuario, $livro);
    }

    public function devolver(Emprestimo $emprestimo) {
        $key = array_search($emprestimo ,$this->emprestimos);
        unset($this->emprestimos[$key]);
    }
}

class Usuario {
    private string $nome;
    private string $login;
    private string $senha;
}

class Emprestimo {
    private string $dataDeEmprestimo;
    private string $dataPrevistaDeDevolucao;
    private string $dataDeEntregaReal;
    private int $situacao;
    private Usuario $usuario;
    private Livro $livro;
}

class Livro {
    private int $id;
    private string $nome;
    private string $autores;
    private string $ano;
}

class Reserva {
    private Usuario $usuario;
    private Livro $livro;
    private int $stauts;
}

?>

