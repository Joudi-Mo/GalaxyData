<?php

namespace App\Models;

use App\Models\Article_tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    public function article_tag()
    {
        return $this->hasMany(Article_tag::class);
    }
}
