<?php

class Porta {
    private bool $aberta;
    private string $cor;
    private float $dimensaoX;
    private float $dimensaoY;
    private float $dimensaoZ;

    public function __construct(string $cor, float $dimensaoX, float $dimensaoY, float $dimensaoZ, bool $aberta = false)
    {
        $this->aberta = $aberta;
        $this->cor = $cor;
        $this->dimensaoX = $dimensaoX;
        $this->dimensaoY = $dimensaoY;
        $this->dimensaoZ = $dimensaoZ;
    }

    public function abre() : void {
        $this->aberta = true;
    }

    public function fecha() : void {
        $this->aberta = false;
    }

    public function pinta(string $cor) : void {
        $this->cor = $cor;
    }

    public function estaAberta() : bool {
        return $this->aberta;
    }

}

class Imovel {
    protected string $cor;
    protected int $totalDePortas;

    public function __construct(string $cor)
    {
        $this->cor = $cor;
    }

    public function quantasPortasEstaoAbertas() : int {
        return 0;
    }

    public function pinta(string $cor) : void {
        $this->cor = $cor;
    }
}

class Casa extends Imovel {
    protected Porta $porta1;
    protected Porta $porta2;
    protected Porta $porta3;
    
    public function __construct(string $cor, Porta $porta1, Porta $porta2, Porta $porta3)
    {
        $this->cor = $cor;
        $this->totalDePortas = 3;
        $this->porta1 = $porta1;
        $this->porta2 = $porta2;
        $this->porta3 = $porta3;
    }

    public function quantasPortasEstaoAbertas() : int {
        $portasAbertas = 0;
        if ($this->porta1->estaAberta()) $portasAbertas++;
        if ($this->porta2->estaAberta()) $portasAbertas++;
        if ($this->porta3->estaAberta()) $portasAbertas++;
        return $portasAbertas;
    }
}

class Edificio extends Imovel {
    protected int $totalDeAndares;
    protected $portas = [];
    
    public function __construct(string $cor, array $portas, int $totalDeAndares)
    {
        $this->cor = $cor;
        foreach ($portas as $porta) {
            if (get_class($porta) == 'Porta') {
                array_push($this->portas, $porta);
            }
        }
        $this->totalDeAndares = $totalDeAndares;
    }

    public function quantasPortasEstaoAbertas() : int
    {
        $portasAbertas = 0;
        foreach ($this->portas as $porta) {
            if (get_class($porta) == 'Porta') {
                if ($porta->estaAberta()) {
                    $portasAbertas++;
                }
            }
        }
        return $portasAbertas;
    }

    public function adicionaPorta(Porta $porta) : void {
        array_push($this->portas, $porta);
    }

    public function adicionaAndar() : void {
        $this->totalDeAndares++;
    }

    public function totalDeAndares() : int {
        return $this->totalDeAndares;
    }
}


?>
