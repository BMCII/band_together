<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Player;

use App\User;

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

//return request()->all();

        $user->addPlayer(
            new Player($request->all())
            );
//
//
//        return view('players.index', compact('players'));

    }


}
