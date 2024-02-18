<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Validator;

class PostController extends BaseController
{

    public function index()
    {
        $posts = Post::all();
        return $this->sendResponse(PostResource::collection($posts), 'Post retrieved successfully.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'desp' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $post = Post::create($input);

        return $this->sendResponse(new PostResource($post), 'Post created successfully.');
    } 

    public function show($id)
    {
        $post = Post::find($id);
        if (is_null($post)) {
            return $this->sendError('Post not found.');
        }
        return $this->sendResponse(new PostResource($post), 'Post retrieved successfully.');
    }

    public function update(Request $request, Post $post)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'desp' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $post->title = $input['title'];
        $post->desp = $input['desp'];
        $post->save();
        return $this->sendResponse(new PostResource($post), 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return $this->sendResponse([], 'Post deleted successfully.');
    }
}
