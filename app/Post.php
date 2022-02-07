<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Post extends Model
{
    
    protected $fillable = [
        'title',
        'author',
        'description',
        'pubblication_date',
        'like',
        'comments',
        'catagory_id'
    ];

    public function category() {

        return $this->belongsTo(Category::class);
    }
}
