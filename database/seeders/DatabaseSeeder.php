<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleTag;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Category::factory(10)->create();
        Tag::factory(10)->create();
        Article::factory(100)->create();
        ArticleCategory::factory(10)->create();
        ArticleTag::factory(10)->create();



    }
}
