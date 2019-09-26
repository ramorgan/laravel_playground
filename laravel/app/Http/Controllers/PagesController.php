<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

        $tasks = [
            "Go to the store",
            "Go to the market",
            "Go to work",
        ];

        return view('welcome')->withTasks($tasks)->withFoo("foobar");
    }

    public function old_welcom()
    {
        return view('old_welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
