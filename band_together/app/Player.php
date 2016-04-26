<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model



{

    protected $fillable = ['stage_name', 'age', 'instrument', 'style',];


    public function notes(){
        return $this->hasMany(Note::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }


}
