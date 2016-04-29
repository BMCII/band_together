<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;

use App\Note;

use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Player $player){

        $note = new Note;

        $note->body = $request->body;

        $player->notes()->save($note);

        return back();
    }
}
