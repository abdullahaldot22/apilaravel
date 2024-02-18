<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function tags()
    // {
    //     return $this
    //     ->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id')
    //     ->withTimestamps()
    //     ->orderByPivot('tag_id', 'asc');
    // }

    public function comments()
    {
        return $this
        ->morphMany(Comment::class, 'commentable');
    }

    public function tags() {
        return $this
        ->morphToMany(Tag::class, 'taggable')
        ->withTimestamps();
    }

}
