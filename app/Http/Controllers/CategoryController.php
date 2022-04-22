<?php

namespace App\Http\Controllers;
use App\Category;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct() {
//        $this->middleware('auth', ['only' => ['create', 'edit','']]);
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    public function index(){

        $categories = Category::paginate(5);

        return view('categories.index',compact('categories'));
    }



    public function show($category){
        $category = Category::findOrFail($category);

        return view('categories.show',compact('category'));
    }


    public function store(CategoryRequest $request) {
        $formData = $request->all();
        Category::create($formData);

//        $category = Category::findOrFail($request->category_id);
//        $post = new post($request->all());
//        $category->posts()->save($post);
        return redirect('categories');
    }

    public function edit($category){
        $category = Category::findOrFail($category);
        return view ('categories.edit' , compact("category"));
    }

    public function update(CaregoryRequest $request, $category ){
        $formData = $request->all();
        $category = Category::findOrFail($category);
        $category->update($formData);
        return redirect('categories');

    }

    public function create(){
        return view('categories.create');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect('categories');

    }







}
