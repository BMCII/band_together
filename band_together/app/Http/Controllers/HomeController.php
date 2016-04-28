<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Auth;

use App\Player;

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

    public function player(){
        return $this->belongsTo(Player::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function view(){

        $players = Player::all()->where('user_id', Auth::User()->id);
        return view('home', compact("players"));
    }


}
