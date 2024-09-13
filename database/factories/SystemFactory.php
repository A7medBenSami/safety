<?php

namespace Database\Factories;

use App\Models\System;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SystemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = System::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image2' => $this->faker->text(255),
            'image3' => $this->faker->text(255),
            'image4' => $this->faker->text(255),
        ];
    }
}
