<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'user_id', 'message'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
