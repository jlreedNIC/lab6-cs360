<?php

// have to use command to create new controller

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function xyz()
    {
        return view('signin');
        // return view('users.signin'); // will load from users folder the signin page
    }

    public function index()
    {
        return view('index');
    }
}
