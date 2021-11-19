<?php

class Revistas {
    private string $codigo;
    private string $titulo;
    private string $tipo;
    private Edicoes $edicao;

    public function getEdicao() {/*...*/}

    /* A composição se dá pelo fato de construir um objeto da classe Edicoes dentro de Revistas, ou seja,
    quando uma Revista for detruída, a Edição também será. */
    public function setEdicao() {
        $this->edicao = new Edicoes();
    }

    public function solicitaCertificado() {/*...*/}
}

class Edicoes {
    protected int $ano;
    protected int $qnt_artigos;
    protected int $num_edition;

    public function getEdicao() {/*...*/}
    public function setEdicao() {/*...*/}
}

?>

