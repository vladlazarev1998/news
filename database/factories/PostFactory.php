<?php

namespace Database\Factories;

use App\Enum\PostStatus;
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
        $body = $this->faker->text(400);

        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->slug,
            'cropped_body' => Str::limit($body),
            'body' => $body,
            'status' => $this->faker->randomElement([PostStatus::ACTIVE, PostStatus::HIDDEN])
        ];
    }
}
