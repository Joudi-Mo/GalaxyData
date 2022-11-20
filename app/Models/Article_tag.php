<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article_tag extends Model
{
    use HasFactory;

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
