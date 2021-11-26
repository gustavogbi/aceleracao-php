<?php

interface Lutador {
    public function lutar();
}

interface Arma {
    public function usarArma();
}

abstract class Personagem {
    private Arma $arma;

    public function lutar() {/*...*/}

    public function atribuiArma(Arma $arma) {
        $this->arma = $arma;
    }
}

class Machado implements Arma {
    public function usarArma() {/*...*/}
}

class ArcoeFlecha implements Arma {
    public function usarArma() {/*...*/}
}

class Espada implements Arma {
    public function usarArma() {/*...*/}
}

class Faca implements Arma {
    public function usarArma() {/*...*/}
}

class Rei extends Personagem {/*...*/}

class Rainha extends Personagem {/*...*/}

class Duende extends Personagem {/*...*/}

class Guerreiro extends Personagem {/*...*/}


?>
