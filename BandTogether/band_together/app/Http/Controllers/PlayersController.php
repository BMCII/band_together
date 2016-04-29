<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Player;
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

    public function store(Request $request){

return request()->all();

//        $player = new Player;
//
//        $player->stage_name = $request->stage_name;
//
//        $player->age = $request->age;
//
//        $player->instrument = $request->instrument;
//
//        $player->style = $request->style;
//
//        $player->player()->save($player);
//
//
//        return view('players.index', compact('players'));

    }


}
