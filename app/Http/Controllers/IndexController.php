<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function welcome()
    {
        $methods = Post::orderBy('sort')->where('type',1)->get();
        $reasons = Post::orderBy('sort')->where('type',2)->get();
        return view('welcome', compact('methods','reasons'));
    }

    public function landing()
    {
        return view('landing');
    }

    public function allMethods()
    {
        $methods = Post::orderBy('sort')->where('type',1)->get();
        return view('index.all-methods', compact('methods'));
    }

    public function showMethods($slug)
    {
        $method = Post::where('url',$slug)->first();
        return view('post.show', compact('method'));
    }

}
