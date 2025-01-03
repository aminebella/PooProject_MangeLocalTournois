<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Player;
use App\Models\Team;


class Player extends Model
{
    /** @use HasFactory<\Database\Factories\PlayerFactory> */
    use HasFactory;

    protected $fillable=[
        'fullName',
        'age',
        'number',
        'position',
        'nationality',
        'team_id'
    ];

    //relations:
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
