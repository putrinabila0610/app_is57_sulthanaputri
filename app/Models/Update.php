<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    public function pengirimans(){
        return $this->hasOne(Pengiriman::class,'id','jeniss_id');
       }
}
