<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // User::insert([
    //     ['name' => 'Sayed Zafar'],
    //     ['name' => 'Johannes Saeed'],
    //     ['name' => 'Thamir Asim'],
    //     ['name' => 'Qadir Yasser'],
    //     ['name' => 'Lenz Wail'],
    // ]);

    // $data = User::find(66);
    // $data->posts()->attach(2,
    //     ['tag_id' => 10]
    // );

    // $data->posts()->attach(
    //     [4 => ['tag_id' => 7]]
    // );

    // $data->tags()->detach(null);

    // $data = DB::table('customers')->get();
    // $tag = Tag::find(3);
    // $post = Post::find(3);
    // Post::find(1)->tags()->attach(1);
    // $data = Post::with('tags')->get();
    // $id = Tag::with('posts')->find(3);

    // $id = Post::with('tags')->find(1);
    // return $id;


    // $data = User::paginate(5);
    // dd($data);
    // die();

    // $data = User::with('tags')->get();
    // $data = DB::table('user_skill')
    // ->Join('users', 'user_skill.user_id', 'users.id')
    // ->Join('posts', 'user_skill.post_id', 'posts.id')
    // ->Join('tags', 'user_skill.tag_id', 'tags.id')
    // ->select('users.id','users.name as user','posts.title as type','tags.name as skill', 'user_skill.created_at as placed at')
    // ->orderByDesc('posts.title')
    // ->orderBy('tags.name')
    // ->get();

    // return view('welcome', [
    //     'data' => $data,
    // ]);

    // User::insert([
    //     [
    //         'name' => 'Paul C. Creed',
    //         'created_at' => Carbon::now(),
    //     ],
    //     [
    //         'name' => 'Stefan C. Triplett',
    //         'created_at' => Carbon::now(),
    //     ],
    //     [
    //         'name' => 'Trevor C. Matthews',
    //         'created_at' => Carbon::now(),
    //     ],
    //     [
    //         'name' => 'Christopher S. Shah',
    //         'created_at' => Carbon::now(),
    //     ],
    //     [
    //         'name' => 'Jerry D. Huff',
    //         'created_at' => Carbon::now(),
    //     ],
    //     [
    //         'name' => 'Charles D. Miller',
    //         'created_at' => Carbon::now(),
    //     ],
    // ]);

    // Post::insert([
    //     [
    //         'user_id' => 2,
    //         'title' => 'Check out this random video on my profile, just a little something to brighten your day!',
    //         'created_at' => Carbon::now(),
    //     ],
    //     [
    //         'user_id' => 1,
    //         'title' => 'Captivated by this eye-opening documentary',
    //         'created_at' => Carbon::now(),
    //     ],
    //     [
    //         'user_id' => 3,
    //         'title' => 'we explore the untold stories and captivating narratives',
    //         'created_at' => Carbon::now(),
    //     ],
    //     [
    //         'user_id' => 3,
    //         'title' => 'challenges our perspectives and empowers us to make a difference',
    //         'created_at' => Carbon::now(),
    //     ],
    //     [
    //         'user_id' => 2,
    //         'title' => 'Embracing the power of storytelling through this captivating',
    //         'created_at' => Carbon::now(),
    //     ],
    //     [
    //         'user_id' => 5,
    //         'title' => 'we explore the untold stories and captivating narratives that shed light on the human experience',
    //         'created_at' => Carbon::now(),
    //     ],
    // ]);

    // $video = Video::create([
    //     'title' => 'npe we get along, I am K',
    //     'created_at' => Carbon::now(),
    // ]);
    // $video->comments()->create([
    //     'user_id' => 2,
    //     'body' => 'I really like to work with wood, woodworking is my hobby and my favorite thing to do after a long day at work.'
    // ]);

        // $post = Post::create([
        //     'user_id' => 1,
        //     'title' => 'Captivated by this eye-opening documentary on',
        // ]);
        // $post->tags()->create([
        //     'name' => 'laravel',
        // ]);

        // $post = Post::find(1);
        // $tag = Tag::create([
        //     'name' => 'PHP',
        // ]);
        // $post->tags()->attach($tag);

        // $video = Video::create([
        //     'title' => 'video title three',
        //     'created_at' => Carbon::now(),
        // ]);
        // $tag = Tag::find(1);
        // $video->tags()->attach($tag);

    // $tag = Tag::find(1);
    // $video = Video::find(1);
    // $post = Post::find(1);
    // $data = $post->comments;
    // $comment = Comment::find(3);
    // $data = $comment->commentable;

    // return response()->json($tag->videos);
    // return response()->json($post->tags);
    // dd($data);

    $faker = Factory::create();
    // $user = User::create([
    //     'name' => $faker->name(),
    // ]);

    // insert doesnt work for event listenr, observer or boot methode -----------------------------------------------------------------------
    // $user = User::insert([
    //     'name' => $faker->name(),
    //     'created_at' => Carbon::now(),
    //     'updated_at' => Carbon::now(),
    // ]);

    echo $faker->name();
    // print_r($user);

})->middleware('throttle:2,60');
