<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WahatsAndWeChate extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
    public function phones(){
        return $this->belongsTo(Phones::class,'whats');
    }
    public function phoneswe(){
        return $this->belongsTo(Phones::class,'we');
    }
}
