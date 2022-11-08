<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BajuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       return [
            'nama' => $this->faker->sentence(5),
            'isi'  => $this->faker->sentence(50),
            'gambar1' => 'jurus_rahasia.jpg',
            'gambar2' => 'jurus_rahasia.jpg',
            'gambar3' => 'jurus_rahasia.jpg',
            'gambar4' => 'jurus_rahasia.jpg',
            'harga' =>$this->faker->randomNumber(5, false),
            'diskon' =>$this->faker->randomNumber(2, false),
            'gambar5' => 'jurus_rahasia.jpg',
        ];
    }
}
