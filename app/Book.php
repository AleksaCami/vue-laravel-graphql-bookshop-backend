<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];
    protected $table = 'books';
    protected $fillable = [
        'title', 'author', 'image', 'description', 'link', 'featured', 'category_id'
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
