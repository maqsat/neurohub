<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Post;
use App\Models\QuestionAnswer;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function welcome()
    {
        $methods = Post::orderBy('sort')->where('type',1)->take(6)->get();
        $question_answers = QuestionAnswer::orderBy('sort')->take(6)->get();
        $reasons = Post::orderBy('sort')->where('type',2)->get();
        return view('welcome', compact('methods','reasons','question_answers'));
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

    public function addOrder(Request $request)
    {

        $request->validate([
            'phone' => 'required',
            'name' => 'required',
        ]);


        Order::create([
            'phone' => $request->phone,
            'name' => $request->name,
            'text' => $request->text,
        ]);


        return view('thank_you_page');

    }

}
