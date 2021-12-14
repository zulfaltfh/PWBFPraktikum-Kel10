<?php

namespace Database\Factories;

use App\Models\Warna;
use Illuminate\Database\Eloquent\Factories\Factory;

class WarnaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Warna::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'warna'=> $this->faker->unique()->safeColorName(),
        ];
    }
}
