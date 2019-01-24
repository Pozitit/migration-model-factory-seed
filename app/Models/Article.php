<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'table_articles';


    public function author()
	{
		return $this->belongsTo(Author::class);
	}

	public function categories()
	{
		return  $this->belongsToMany(Category::class, 'table_article_category', 'article_id');
	}

	public function tags()
	{
		return  $this->belongsToMany(Tag::class, 'table_article_tag', 'tag_id');
	}

}
