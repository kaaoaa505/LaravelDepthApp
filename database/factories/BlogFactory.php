<?php

namespace Database\Factories;

use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            'title' => $title,
            'body' => fake()->text(),
            'image' => UploadedFile::fake()->image('photo1.jpg'),
            'user_id' => 2,
        ];
    }
}
