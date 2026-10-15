<?php
namespace Database\Factories;

use App\Models\Major;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'nis' => fake()->unique()->numerify('####'),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'user_id' => User::factory(),
            'major_id' => Major::query()->inRandomOrder()->value('id')
                ?? Major::factory()->create()->id,
            'class_id' => SchoolClass::query()->inRandomOrder()->value('id')
                ?? SchoolClass::factory()->create()->id,
        ];
    }
}
