<?php

namespace Database\Seeders;

use App\Models\Pdf;
use Illuminate\Database\Seeder;

class PdfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pdf::factory()
            ->count(5)
            ->create();
    }
}
