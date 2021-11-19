<?php

namespace References;

require_once('../exercicio78.php');
use exercicio78;

class Biblioteca {
    private array $usuarios;
    private array $itens;
    private array $emprestimos;
    private array $reservas;

    public function emprestar(exercicio78\Usuario $usuario, exercicio78\Livro $livro) {
        $this->usuarios[] = $usuario;
        $this->itens[] = $livro;
        $this->emprestimos[] = new exercicio78\Emprestimo($usuario, $livro);
    }

    public function reservar(exercicio78\Usuario $usuario, exercicio78\Livro $livro) {
        $this->usuarios[] = $usuario;
        $this->itens[] = $livro;
        $this->reservas[] = new exercicio78\Reserva($usuario, $livro);
    }

    public function devolver(exercicio78\Emprestimo $emprestimo) {
        $key = array_search($emprestimo ,$this->emprestimos);
        unset($this->emprestimos[$key]);
    }
}

?>

