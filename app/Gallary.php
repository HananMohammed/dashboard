<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallary extends Model
{

    public  function user(){
        return $this->belongsTo(User::class,'created_by');
    }

}
