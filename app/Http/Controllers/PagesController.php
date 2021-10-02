<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function resume(){
        return view('resume');
    }
    public function services(){
        return view('service');
    }

    public function portfolio(){
        return view('portfolio');
    }

    // public function about(){
    //     $skills= \App\Http\Controllers\SkillController->index();
    //     return view('about');
    // }
}
