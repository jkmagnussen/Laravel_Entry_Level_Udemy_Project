<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'user_id' => User::factory()->make(),
            'title' => fake()->sentence,
            'post_image' => fake()->imageUrl('900', '300'),
            'body' => fake()->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}