<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CatFactory extends Factory
//El nombre de los factory es en singular

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
            'user_id' =>1,
            'name'=> fake()->name($gender = 'male'|'female') ,
            'caracteristica'=> fake()->text(20),
            'edad'=>fake()->randomDigit(),
            //'gatos'=>fake()->randomElement(['mimi','albafica','afrodita','cassie']),
            'gatos'=>fake()->name(),
        ];
    }
}
