<?php

// Princípio da Segregação de Interfaces
// IRP - Interface Segregation Principle - SOLID

interface Voador
{
    public function voar();
}

interface Nadador
{
    public function nadar();
}

interface Aves
{
    public function andar();
}

class Pinguim implements Aves, Nadador
{
    public function nadar()
    {
        //lógica
    }

    public function andar()
    {
        //lógica
    }
}

class Pato implements Aves, Voador, Nadador
{
    public function voar()
    {
        //lógica
    }

    public function nadar()
    {
        //lógica
    }

    public function andar()
    {
        //lógica
    }
}

class Andorinha implements Aves, Voador
{
    public function voar()
    {
        //lógica
    }

    public function andar()
    {
        //lógica
    }
}
