<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;

use App\User;

use App\Http\Requests;

class PlayerController extends Controller
{



    public function store(Request $request, User $user){

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
//        $user->player()->save($player);
//
//
//            return view('players.index');

    }
}
