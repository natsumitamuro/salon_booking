<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salon>
 */
class SalonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Salon::class;

    public function definition()
    {
        return [
            'salonname' => $this->faker->company(),
            'adress' =>$this->faker->adress()
        ];
    }
}
