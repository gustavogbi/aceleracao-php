<?php

// Principio de Inversão de Dependência
// DIP - Dependency Inversion Principle - SOLID

interface Mensageiro {
    function enviar($mensagem);
}

class Email implements Mensageiro{
    public function enviar($mensagem) {}
}

class Notificacao {
    public function enviar(Mensageiro $mensageiro, $mensagem) {
        $mensageiro->enviar($mensagem);
    }
}

?>
