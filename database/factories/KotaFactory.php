<?php

namespace Database\Factories;

use App\Models\Kota;
use Illuminate\Database\Eloquent\Factories\Factory;

class KotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kota::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_kota' =>$this->faker->unique()->city,
        ];
    }
}
