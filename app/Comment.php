<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function Post()
    {
        return $this->belongsTo(Post::class,"post_id");
    }
    public function User()
    {
        return $this->belongsTo(User::class,"user_id");
    }
}
