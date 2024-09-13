<?php

namespace Database\Factories;

use App\Models\Pdf;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PdfFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pdf::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [];
    }
}
