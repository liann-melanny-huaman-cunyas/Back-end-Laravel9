<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CatsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        //https://fakerphp.github.io/formatters/
        return [
            'name'=> fake()->randomElement(['mimi','alabafica','afrodita','cassie']),
            'caracteristica'=> fake()->text(20),
            'edad'=>fake()->randomDigit(),
            'gatos'=>fake()->randomElement(['mimi','alabafica','afrodita','cassie']),
        ];
    }
}
