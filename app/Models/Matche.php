<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Matche;
use App\Models\Team;

class Matche extends Model
{
    /** @use HasFactory<\Database\Factories\MatcheFactory> */
    use HasFactory;

    protected $fillable=[
        'team1_id',
        'team2_id',
        'kickoff_time',
        'status',
        'score_team1',
        'score_team2',
    ];

    //relation
    public function team1(){
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2(){
        return $this->belongsTo(Team::class, 'team2_id');
    }
}
