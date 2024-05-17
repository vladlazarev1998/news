<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
        $body = $this->faker->text();

        return [
            'title' => $this->faker->title,
            'slug' => $this->faker->slug,
            'cropped_body' => Str::limit($body),
            'body' => $body,
            'status' => $this->faker->randomElement(['active', 'hidden'])
        ];
    }
}
