<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'table_categories';
	 public $timestamps = false;

	public function articles()
	{
		return  $this->belongsToMany(Article::class, 'table_article_category', 'category_id');
	}

}
