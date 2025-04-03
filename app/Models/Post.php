<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', '_id', 'where_it_happen', 'age', 'gender', 'rating', 'category', 'story', 'likes', 'comments', 'views'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function likes(){
        return $this->hasMany(Likes::class, 'post_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'post_id');
    }
}
