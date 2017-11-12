<?php

namespace App\Http\Controllers;


use Auth;
use App\User;
use App\Profile;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         return view('home')->with('user', Auth::user());
    }

}
