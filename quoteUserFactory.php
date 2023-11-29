<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\quoteUser;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\quoteUser>
 */
class quoteUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = quoteUser::class;

    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'password' => bcrypt('password'),
        ];
    }
}
