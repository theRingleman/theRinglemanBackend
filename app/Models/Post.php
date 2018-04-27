<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'author_id', 'body_id'];

    protected $table = 'Posts';

    public function body()
    {
        return $this->hasOne('App\Models\PostBody');
    }
}