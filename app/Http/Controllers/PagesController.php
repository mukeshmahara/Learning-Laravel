<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title ='Welcome to Laravel';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'About us';
        // return view('pages.about',compact('title'));
        return view('pages.about')->with('title',$title); 
    }

    public function portfolio(){
        $title = 'My Portfolio';  
        return view('pages.portfolio',compact('title'));
    }

    public function login(){
        $title = 'login Page';
        return view('pages.login', compact('title'));
    }

    public function welcome(){
        $title = 'Welcome';
        return view('pages.welcome', compact('title'));
    }
}
