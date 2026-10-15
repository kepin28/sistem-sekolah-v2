<?php

namespace Database\Factories;
use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SchoolClass>
 */
class SchoolClassFactory extends Factory
{
    protected $model = SchoolClass::class;

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                '10 AKL',
                '11 AKL',
                '12 AKL',
                '10 TKJ 1',
                '11 TKJ 1',
                '11 TKJ 2',
                '12 TKJ 1',
                '12 TKJ 2',
                '12 TKJ 3',
                '10 BiD 1',
                '10 BiD 2',
                '11 BiD',
                '12 BiD',
            ]),
        ];
    }
}
