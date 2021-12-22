<?php

interface Saida{
    public function imprimir($texto);
}

class Json implements Saida{
    public function imprimir($texto){
        return json_encode($texto);
    }
}

class Xml implements Saida {
    public function imprimir($texto){
        $string ="<?xml version='1.0'?><document>";

        foreach($texto as $key => $value){
            $string .= "<$key>$value</$key>";
        }

        $string .= "</document>";
        //$xml = simplexml_load_string($string);
        //print_r($string);

        return $string;
    }
}

class StringSeparadaPorVirgula implements Saida {
    public function imprimir($texto){
        $saida = "";
        foreach($texto as $key => $value){
            $saida .= "{$key},{$value}" . PHP_EOL;
        }
        return $saida;
    }
}

class ClienteTransfer{
    private $cliente;
    private $texto;

    public function __construct($texto, Saida $cliente){
        $this->cliente = $cliente;
        $this->texto = $texto;
    }

    public function getSaida() {
        return $this->cliente->imprimir($this->texto);
    }
}

$cliente = new ClienteTransfer(["id" => 1, "nome" => "Gustavo"], new Xml());
echo $cliente->getSaida() . "<br><br>";
$cliente = new ClienteTransfer(["id" => 1, "nome" => "Gustavo"], new Json());
echo $cliente->getSaida() . "<br><br>";
$cliente = new ClienteTransfer(["id" => 1, "nome" => "Gustavo"], new StringSeparadaPorVirgula());
echo $cliente->getSaida() . "<br><br>";
