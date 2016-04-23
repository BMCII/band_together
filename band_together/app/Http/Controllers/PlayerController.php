<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;

use App\Http\Requests;

class PlayerController extends Controller
{

    public function profile_form(){
        return view('players.profile_form');
    }

//    public function store(Request $request, Player $player){
//
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
//        $player->players()->save($player);
//
//        return back();
//    }
}
