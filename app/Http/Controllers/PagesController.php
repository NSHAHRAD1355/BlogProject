<?php

namespace App\Http\Controllers;

class PagesController extends  Controller{
    public function getIndex(){
        return view('pages.welcome');

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
