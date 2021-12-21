<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->text(50),
            'tamanho' => random_int(0, 100),
            'assinaturas' => random_int(0, 100),
            'assinatura_do_responsavel' => $this->faker->name(),
            'qtd_paginas' => random_int(1, 2),
        ];
    }
}
