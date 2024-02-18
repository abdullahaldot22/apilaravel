<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function posts() {
    //     return $this
    //     ->belongsToMany(Post::class, 'post_tag', 'tag_id', 'post_id')
    //     ->withTimestamps();
    // }


    public function user() {
        return $this
        ->belongsToMany(User::class, 'user_skill', 'user_id', 'post_id')
        ->withPivot('tag_id');
    }

    public function posts() {
        return $this
        ->morphedByMany(Post::class, 'taggable');
    }
    public function videos() {
        return $this
        ->morphedByMany(Video::class, 'taggable');
    }
}
