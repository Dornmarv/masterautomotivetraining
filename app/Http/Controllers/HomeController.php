<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

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
        $members = Member::orderBy('id', 'desc')->get();
        $count = Member::count();
        return view('home')->with('members', $members)->with('count', $count);
    }
}
