<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = true;
    public $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class,"user_id");
    }

    public function Comment(){
        return $this->hasMany(Comment::class,'post_id');
    }

    public function Categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
}
