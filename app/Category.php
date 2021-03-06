<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected $table = 'categories';
    protected $fillabe = [
        'name'
    ];

    public function books() {
        return $this->hasMany('App\Book');
    }
}
