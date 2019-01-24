<?php

use Illuminate\Database\Seeder;
// use App\Models\ArticleTag;
use App\Models\Article;
use App\Models\Tag;

class ArticleTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		$faker = \Faker\Factory::create();

        $data = [];
        for ($i = 0; $i < 10000; $i++) {
            $data[] = [
                'article_id' => $faker->numberBetween(1, Article::count()),
                'tag_id' => $faker->numberBetween(1, Tag::count()),
            ];
        }

        DB::table('table_article_tag')->insert($data);
    }
}
