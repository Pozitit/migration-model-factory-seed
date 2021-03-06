<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'table_authors';
    public $timestamps = false;

	public function articles()
    {
    	return $this->hasMany(Article::class);
    }

}
