<?php

namespace App\Http\Controllers;
use App\Http\Requests\TagRequest;
use App\Tag;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __construct() {
//        $this->middleware('auth', ['only' => ['create', 'edit','']]);
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index(){
        $tags = Tag::paginate();
        return view('tags.index', compact("tags"));
    }

    public function create(){
        return view('tags.create');
    }



    public function store(TagRequest $request) {
        $formData = $request->all();
        Tag::create($formData);
        return view('tags.index');
    }

    public function show($tag){
        $tag = Tag::findOrFail($tag);

        return view('tags.show',compact('tag'));
    }


    public function edit($tag){
        $tag = Tag::findOrFail($tag);
        return view ('tags.edit' , compact("tag"));
    }

    public function update(TagRequest $request, $tag ){
        $formData = $request->all();
        $tag = Tag::findOrFail($tag);
        $tag->update($formData);
        return redirect('tags.index');

    }

    public function destroy(Tag $tag){
        $tag->delete();
        return redirect('tags.index');

    }




}
