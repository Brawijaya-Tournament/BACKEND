<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => $this->faker->numberBetween(1, 2),
            'id_cabor' => $this->faker->numberBetween(1, 4),
            'nama_team' => $this->faker->randomElement(['Evos', 'Aura', 'Geek', 'Onic', 'BTR']),
            'universitas' => $this->faker->randomElement(['UGM', 'UB', 'UI', 'ITS', 'ITB']),
            'remember_token' => Str::random(10),
        ];
    }
}
