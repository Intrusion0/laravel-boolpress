<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Tag;

class Post extends Model
{
    
    protected $fillable = [
        'title',
        'author',
        'description',
        'pubblication_date',
        'like',
        'comments',
        'category_id'
    ];

    public function category() {

        return $this->belongsTo(Category::class);
    }

    public function tags() {

        return $this->belongsToMany(Tag::class);
    }
}
