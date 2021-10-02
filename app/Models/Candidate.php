<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    public function team(){

        return $this->belongsTo(Team::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
