<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;

class PostController extends Controller

{
    public function __construct() {
//        $this->middleware('auth', ['only' => ['create', 'edit','']]);
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }



    public function index(){
        $posts = Post::paginate(5);

        return view('posts.index',compact("posts"));

    }

    public function create(){
        $categories = Category::all()->pluck('name', 'id');
        $tags= Tag::all()->pluck('name','id');
        return view('posts.create' ,compact("categories","tags"));

    }

    public function store(PostRequest $request){
//        $formData = $request->all();
//        Post::create($formData);

        $category = Category::findOrFail($request->category_id);
        $post = new Post($request->all());
        $post->category()->associate($category)->save();
        $post->tags()->sync($request->tags);
        return redirect('posts');
    }


    public function show( Post $post){
//        $post = Post::find($post);

        return view('posts.show',compact('post'));
    }

    public function edit($post){
        $post = Post::findOrFail($post);

        return view('posts.edit', compact("post"));
    }

    public function update(PostRequest $request , $post){
        $formdata = $request->all();
        $post = Post::findOrFail($post);
        $post->update($formdata);
        return redirect('posts');


    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('posts');
    }

}
