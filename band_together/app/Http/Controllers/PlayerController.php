<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PlayerController extends Controller
{
    public function store(Request $request, Player $player){

        $player = new Player;

        $player->stage_name = $request->stage_name;

        $player->age = $request->age;

        $player->instrument = $request->instrument;

        $player->style = $request->style;

        $player->players()->save($player);

        return back();
    }
}
