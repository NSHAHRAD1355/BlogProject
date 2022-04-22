<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;

class PagesController extends  Controller{
    public function getIndex(){
//        $posts = Post::paginate(10);
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        return view('pages.welcome', compact("posts"));

    }

    public function getAbout(){
        $first = 'Nazanin';
        $last = 'Shahrad';
        $fullname = $first . " " . $last;
        $email ='nazanin.shahrad@gmail.com';
        return view('pages.about' , compact("fullname","email"));

    }

    public function getContact(){
        return view('pages.contact');

    }


}
