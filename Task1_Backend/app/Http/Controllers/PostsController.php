<?php

namespace App\Http\Controllers;

use App\Http\Resources\MiniPostsResources;
use App\Http\Resources\PostsResources;
use App\Models\Posts;
use App\Http\Requests\PostsRequest;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show(Request $request, Posts $post)
    {
        
        # code...
        // show specific post
        return new PostsResources($post);
    }
    public function index()
    {
        // order all posts by ids and paginagte them
        $post= Posts::orderBy('id')->paginate(10);
        return PostsResources ::collection($post);
        # code...
    }
    public function add(PostsRequest $request)
    {
            // add new post for database after checking valdition
  
        $post=   Posts::create($request->validated());
        return $post;
    
        # code...
    }
}
