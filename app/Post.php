<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Post;
use App\User;
use App\Session;


class Post extends Model
{



    protected $fillable = [

        'content', 'tag', 'user_id'

        ];


    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
    }
}
