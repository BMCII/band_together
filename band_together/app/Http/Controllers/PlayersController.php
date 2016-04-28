<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Player;

use App\User;

use Auth;

use Symfony\Component\HttpKernel\Profiler\Profile;


class PlayersController extends Controller
{

    public function index(){
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    public function show(Player $player){


        return view('players.show', compact('player'));
    }

    public function store(Request $request, User $user){

        $player = new Player;
        $player->stage_name = $request->stage_name;
        $player->age = $request->age;
        $player->instrument = $request->instrument;
        $player->style = $request->style;

        $user->player()->save($player);


       return back();

    }

    public function view(){

        $players = Player::all()->where('user_id', Auth::User()->id);
        return view('players.user', compact("players"));
    }

    public function players(){

        $players = Player::all()->where('user_id', Auth::User()->id);
        return view('players.user', compact("players"));
    }


}
