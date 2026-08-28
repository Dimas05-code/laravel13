<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $post = fake()->sentence(rand(6, 8));
        return [
            'tittle' => $post,
            'slug' => Str::slug($post),

            // 'author' => fake()->name(),

            // buat data post sekalian data user dibuatkan
            'author_id' => User::factory(),

            'isi' => fake()->text(),
        ];
    }
}
