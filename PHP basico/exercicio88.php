<?php

class Cliente{}

class ClienteRespository{
    public function is_valid(Cliente $client) {
        echo "Cliente é válido";
        return true;
    }

    public function adicionarCliente(Cliente $client) {
        if ($this->is_valid($client)) {
            echo "Cliente adicionado com sucesso";
        } else {
            echo "Cliente não é válido";
        }
    }
}

class ClienteService
{
    public function AdicionarCliente(Cliente $cliente, ClienteRespository $repo)
    {
        $repo->adicionarCliente($cliente);
    }
}

?>
