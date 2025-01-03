<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Classement;
use App\Models\Team;

class Classement extends Model
{
    /** @use HasFactory<\Database\Factories\ClassementFactory> */
    use HasFactory;

    protected $fillable = [
        'team_id', 
        'match_played', 
        'win', 
        'lose', 
        'tied', 
        'points', 
        'goals'
    ];

    //relation
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
