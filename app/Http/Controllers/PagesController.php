<?php

namespace App\Http\Controllers;

use App\item;
use App\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        $title = "welcome to my project";
        return view('pages.index',compact('title'));
    }

    public function about(){
        $title = "about us ";
        return view('pages.about',compact('title'));
    }
    public function services(){
        $title = "services";
        return view('pages.services',compact('title'));
    }


}
