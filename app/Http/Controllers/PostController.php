<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get();
        return view('posts.index',compact("posts"));

    }

    public function create(){
        return view('posts.create');

    }

    public function store(Request $request){
        $formData = $request->all();
        Post::create($formData);
        return redirect('posts');
    }


    public function show($post){
        $post = Post::find($post);
        return view('posts.show',compact('post'));
    }

}
