<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserData;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $UserData = UserData::orderby('id','desc')->get();
        return view('user.list',compact('UserData'));
    }
}
