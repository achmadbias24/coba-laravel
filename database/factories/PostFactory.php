<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'account_id' => mt_rand(1, 12),
            'judul' => $this->faker->sentence(mt_rand(1, 6)),
            'content' => $this->faker->paragraph(mt_rand(5, 10))
        ];
    }
}
