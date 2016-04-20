<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['body'];

    public function player(){
        return $this->belongsTo(Player::class);
    }
}
