<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function Post()
    {
        return $this->hasMany('App\Post');
    }
}
