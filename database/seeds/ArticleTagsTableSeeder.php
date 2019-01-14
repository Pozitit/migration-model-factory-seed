<?php

use Illuminate\Database\Seeder;
use App\Models\ArticleTag;

class ArticleTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(ArticleTag::class, 100)->create();
    }
}
