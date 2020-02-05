<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function portfolio(){
        return view('pages.portfolio');
    }

    public function login(){
        return view('pages.login');
    }

    public function welcome(){
        return view('pages.welcome');
    }
}
