<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model



{

    protected $fillable = ['stage_name'];

    public function notes(){
        return $this->hasMany(Note::class);
    }


    public function player(){
        return $this->belongsTo(User::class);
    }


}
