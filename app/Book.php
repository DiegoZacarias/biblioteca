<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

	protected $fillable = [
         'book_code', 'category_id','name', 'writer',
    ];
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function details()
    {
    	return $this->hasMany(Detail::class);
    }
}
