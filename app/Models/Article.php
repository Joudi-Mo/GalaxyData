<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Article_tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags');// article_tag
    }

    //  //tag filtering voor de homepagina
    //  public function scopeFilter($query, array $filters){
    //     // dd($filters('tag'));
    //     if($filters['tag'] ?? false){
    //         $query->where('tags', 'like', '%' . request('tag') . '%');
    //     }
    // }
}