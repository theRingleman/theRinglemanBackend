<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostBody extends Model
{
    protected $fillable = ['body', 'post_id'];

    protected $table = "PostBodies";

    public function post()
    {
        $this->hasOne('App\Models\Post');
    }
}
