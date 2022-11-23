<?php

namespace App\Models;

use App\Models\Article_tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    public function articles()   
    {
        return $this->belongsToMany(Article::class, 'article_tags');
    }

    // public function filterOnTag(){
    //     return $this->belongsToMany( Article::class, 'article_tags')->wherePivot('tag', request(['tag']));
    // }
}