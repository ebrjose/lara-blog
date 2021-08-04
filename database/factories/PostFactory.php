<?php

namespace Database\Factories;


use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $category_ids = $user_ids = [1, 2, 3, 4, 5];

        return [
            'slug' => $this->faker->slug(),
            'title' => $this->faker->realTextBetween(20, 50),
            'description' => '<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>',
            'category_id' => $this->faker->randomElement($category_ids),
            'user_id' => $this->faker->randomElement($user_ids)
        ];
    }
}
