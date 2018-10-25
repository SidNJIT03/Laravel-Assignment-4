<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }
    public function about()
    {
        //$users = User::all();
        /*$users = User::where('id', 1)
            ->orderBy('name', 'desc')
            ->take(10)
            ->get();*/
        $users = Auth::user();
        $posts = $users->posts;
        //dd($posts);
        //dd($users->count());
        return view('profile', ['posts' => $posts]);
    }
}
