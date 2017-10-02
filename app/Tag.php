<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Post;
use App\User;
use App\Session;


class Tag extends Model
{
    protected $fillable = [

        'tag'

    ];

    public function posts()
    {
        return $this->belongsToMany('App\Post', 'post_tag', 'tag_id', 'post_id');
    }


    public function getRouteKeyName()
    {
        return 'tag';
    }
}


