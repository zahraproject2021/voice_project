<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public function condidate()
    {
        return $this->belongsTo(Candidate::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
