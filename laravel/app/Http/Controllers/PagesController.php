<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'tasks' => [
                "Go to the store",
                "Go to the market",
                "Go to work",
            ],
            'foo' => 'foobar'
        ]);
    }

    public function old_welcome()
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
