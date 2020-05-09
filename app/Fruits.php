<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruits extends Model
{
    //
    public function category (){
       return $this->belongsTo(category::class,'category');
    }
    public  function user(){
       return $this->belongsTo(User::class,'created_by');
    }
}
