<?php

class Pessoa {
    private $id;
    private $nome;
    private $cpf;
    private $rg;
    private $endereco;
} 

class Aluno extends Pessoa {
    private string $matricula;
    private string $curso;
}

class Atendente extends Pessoa {
    private int $numAtendente;
}

class Tecnico extends Pessoa {
    private string $funcao;
    private int $numTecnico;

    public function funcao(): string {
        return $this->funcao;
    }

    public function numTecnico(): int {
        return $this->numTecnico;
    }
}

class Atendimento {
    private string $protocolo;
    private Grupo $grupo;
    private Atendente $atendente;
    private Tecnico $tecnico;
    private Aluno $aluno;
    private TipoServico $tipo;
    private int $idCategoria;
    private int $idItem;

    public function alteraStatusAtendimento() {
        echo "Status de atendimento alterado";
    }

    public function finalizaAtendimento() {
        echo "Atendimento finalizado";
    }

    public function repassaAtendimento() {
        echo "Atendimento passado adiante";
    }
}

class TipoServico {
    private int $id;
    private string $nome;
    private string $descricao;
    private int $nivel;

    public function verificaPrioridade(): bool {
        return true;
    }

    public function aumentaNivel(): bool {
        $this->nivel++;
        return true;
    }
}

class Grupo {
    private int $id;
    private string $nome;
    private string $descricao;
}

interface Pagamento {
    public function status();
    public function verificaMeioDePagamento(): bool;
    public function mostraQuantidadeParcelas(): bool;
    public function aplicaDesconto(): bool;
    public function aplicaJuros(): bool;
    public function aplicaTaxa(): bool;
    public function removeTaxa(): bool;
    protected function atualizaStatus(): string;
    protected function criaIdentificador(Aluno $aluno, string $hash): bool;
}

class Pix implements Pagamento {
    private int $id;
    private string $chave;
    private Conta $conta;

    public function status() {/*...*/}
    public function verificaMeioDePagamento(): bool {
        return true;
    }
    public function mostraQuantidadeParcelas(): bool {
        return true;
    }
    public function aplicaDesconto(): bool {
        return true;
    }
    public function aplicaJuros(): bool {
        return true;
    }
    public function aplicaTaxa(): bool {
        return true;
    }
    public function removeTaxa(): bool {
        return true;
    }
    protected function atualizaStatus(): string {
        return "Status atualizado";
    }
    protected function criaIdentificador(Aluno $aluno, string $hash): bool {
        return true;
    }
}

class Cartao implements Pagamento {
    private int $id;
    private string $tipo;
    private Conta $conta;

    public function status() {/*...*/}
    public function verificaMeioDePagamento(): bool {
        return true;
    }
    public function mostraQuantidadeParcelas(): bool {
        return true;
    }
    public function aplicaDesconto(): bool {
        return true;
    }
    public function aplicaJuros(): bool {
        return true;
    }
    public function aplicaTaxa(): bool {
        return true;
    }
    public function removeTaxa(): bool {
        return true;
    }
    protected function atualizaStatus(): string {
        return "Status atualizado";
    }
    protected function criaIdentificador(Aluno $aluno, string $hash): bool {
        return true;
    }
}

class Conta {
    private int $id;
    private int $agencia;
    private int $digito;
    private string $conta;
    private array $pagamentos;

    public function adicionaPagamento(Pagamento $pagamento) {
        $pagamentos[] = $pagamento;
    }
}

class Categoria {
    private int $id;
    private string $nome;
    private string $descricao;

    public function verificaPrioridade(): bool {
        return true;
    }

    public function aumentaNivel(): bool {
        return true;
    }
}

class Subcategoria extends Categoria {
    private int $id;
    private Categoria $categoria;
    private string $descricao;

    public function verificaPrioridade(): bool {
        return true;
    }

    public function aumentaNivel(): bool {
        return true;
    }
}

?>
