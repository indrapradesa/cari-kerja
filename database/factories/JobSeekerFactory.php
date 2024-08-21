<?php

namespace Database\Factories;

use App\Models\JobSeeker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobSeeker>
 */
class JobSeekerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = JobSeeker::class;

    public function definition(): array
    {
        return [
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'name' => $this->faker->name,
            'date_of_birth' => $this->faker->date('Y-m-d'),
            'gender' => $this->faker->randomElement(['laki-laki', 'perempuan']),
            'current_address' => $this->faker->address,
            'domicile_address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'is_collage' => $this->faker->boolean,
            'name_education' => $this->faker->company,
            'majoring_in_education' => $this->faker->word,
            'graduation_year' => $this->faker->year,
        ];
    }
}
