<?php

namespace App;

use App\Tag;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded=[];

    public function commetns()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {   
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
