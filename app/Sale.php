<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fruits;

class Sale extends Model
{
    //
    public  function user(){
        return $this->belongsTo(User::class,'created_by');
    }
    public  function frouts(){
        return $this->belongsTo(Fruits::class,'car_id');
    }
}
