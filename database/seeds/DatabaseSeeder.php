<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticleCategoryTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(ArticleTagsTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}
