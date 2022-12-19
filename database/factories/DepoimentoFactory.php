<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepoimentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idade' => $this->faker->numberBetween($min = 0, $max = 100),
            'cidade' => $this->faker->city(),
            'estado' => $this->faker->stateAbbr(),
            'mensagem' => $this->faker->text($maxChar = 350),
        ];
    }
}
