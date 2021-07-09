<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title=$this->faker->sentence();
        return [
            'title' => $title,
            'slug' => $title,
            'text' => $this->faker->text(200),
            'thumbnail' => $this->faker->image('storage/app/images',640,480, null, false),
            'user_id'=>User::all()->random()->id
        ];
    }
}
