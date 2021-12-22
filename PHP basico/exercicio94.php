<?php

// Abstract Factory - Design Pattern

interface SiteFactory
{
    public function criaCabecalho(): Cabecalho;

    public function criaRodape(): Rodape;
}

class AzulFactory implements SiteFactory
{
    public function criaCabecalho(): Cabecalho
    {
        return new CabecalhoAzul();
    }

    public function criaRodape(): Rodape
    {
        return new RodapeAzul();
    }
}

class VerdeFactory implements SiteFactory
{
    public function criaCabecalho(): Cabecalho
    {
        return new CabecalhoVerde();
    }

    public function criaRodape(): Rodape
    {
        return new RodapeVerde();
    }
}

interface Cabecalho
{
    public function formataCabecalho(): string;
}

class CabecalhoAzul implements Cabecalho
{
    public function formataCabecalho(): string
    {
        return '<h1 style="background-color:blue">Cabeçalho Azul</h1>';
    }
}

class CabecalhoVerde implements Cabecalho
{
    public function formataCabecalho(): string
    {
        return '<h1 style="background-color:green">Cabeçalho Verde</h1>';
    }
}

interface Rodape
{
    public function formataRodape(): string;

    public function juntaComCabecalho(Cabecalho $cabecalho): string;
}

class RodapeAzul implements Rodape
{
    public function formataRodape(): string
    {
        return '<footer style="background-color:blue">Rodapé Azul</footer>';
    }

    public function juntaComCabecalho(Cabecalho $cabecalho): string
    {
        return $cabecalho->formataCabecalho() . $this->formataRodape();
    }
}

class RodapeVerde implements Rodape
{
    public function formataRodape(): string
    {
        return '<footer style="background-color:green">Rodapé Verde</footer>';
    }

    public function juntaComCabecalho(Cabecalho $cabecalho): string
    {
        return $cabecalho->formataCabecalho() . $this->formataRodape();
    }
}

// Testes

function criaSite(SiteFactory $factory): string
{
    $cabecalho = $factory->criaCabecalho();
    $rodape = $factory->criaRodape();

    return $rodape->juntaComCabecalho($cabecalho);
}

//echo criaSite(new AzulFactory());
echo criaSite(new VerdeFactory());
