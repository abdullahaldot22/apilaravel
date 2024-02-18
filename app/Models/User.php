<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Events\UserCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // model event method [rtc _> real time application]-----------------------------------------------------------------
    // protected $dispatchesEvents = [
    //     'created' => UserCreated::class,
    // ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function posts(){
        return
        $this
        ->belongsToMany(Post::class, 'user_skill', 'user_id', 'post_id')
        ->withPivot('tag_id')
        ->withTimestamps();
    }
    public function tags(){
        return
        $this
        ->belongsToMany(Tag::class, 'user_skill', 'user_id', 'tag_id')
        ->withPivot('post_id')
        ->withTimestamps();
    }


    // model boot method-----------------------------------------------------------------
    // public static function boot() {
    //     parent::boot();

    //     static::created(
    //         function ($user) {
    //             dd('from boot method', $user);
    //         }
    //     );
    //     static::updated(
    //         function ($user) {
    //             dd('from boot method', $user);
    //         }
    //     );
    // }
}
