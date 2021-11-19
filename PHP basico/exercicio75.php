<?php

class Aluno {
    private string $matricula;
    private string $nome;
    private string $sobrenome;
    private string $cpf;
    private string $rg;
    private int $idade;
    private int $nivelEscolar;

    public function realizaMatricula() {/*...*/}
    public function realizaRequerimento() {/*...*/}
    public function solicitaCertificado() {/*...*/}
}

class Turma {
    protected string $ano;
    protected string $nome_turma;
    protected array $alunos;
    protected int $capacidade;

    public function listarAlunos() {/*...*/}
    public function exibeVagas() {/*...*/}

    /* A agregação se dá pelo fato de passar o aluno como parâmetro, ou seja, mesmo que o objeto Turma
    seja destruído, o aluno continuará existindo. */
    public function adicionaAluno(Aluno $aluno) {
        $this->alunos[] = $aluno;
    }
}

?>

