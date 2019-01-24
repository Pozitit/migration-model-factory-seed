<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'table_tags';
    public $timestamps = false;

    public function articles()
	{
		return  $this->belongsToMany(Article::class, 'table_article_tag', 'tag_id');
	}
}