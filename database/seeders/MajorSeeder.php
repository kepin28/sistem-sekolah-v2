<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    public function run(): void
    {
        foreach (['AKL', 'BiD', 'TKJ'] as $name) {
            Major::firstOrCreate(['name' => $name]);
        }
    }
}