<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\People;
class Manager extends Model
{
    use HasFactory;

    public function people(){
        return $this->belongsTo(People::class,'people_id','id');
    }
}
