<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'title' => fake()->realTextBetween(20, 100),
      'description' => fake()->text(5000),
      'image' => fake()->imageUrl(),
      'user_id' => fake()->numberBetween(1, 50)
    ];
  }
}

