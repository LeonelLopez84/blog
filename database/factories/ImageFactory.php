<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->image('storage/app/images',640,480, null, false),
            'article_id'=>Article::all()->random()
        ];
    }
}
