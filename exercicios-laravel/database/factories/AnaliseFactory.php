<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnaliseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_doc' => random_int(1, 600),
            'id_assinatura' => random_int(1, 3),
            'status' => $this->faker->text(45),
            'data_analise' => $this->faker->dateTime(),
            'visualizadores' => random_int(0, 1000),
        ];
    }
}
