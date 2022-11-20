<?php

namespace App\Models;

use App\Models\User;
use App\Models\Article_tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function article_tag()
    {
        return $this->hasMany(Article_tag::class);
    }
}
