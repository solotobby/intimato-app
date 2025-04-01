<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillables = ['user_id', '_id', 'where_it_happen', 'age', 'gender', 'rating', 'category', 'story'];
}
