<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Team;
use App\Models\Player;
use App\Models\Matche;
use App\Models\Classement;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'logo', 
        'coach', 
        'stadium'
    ];

    public function players(){
        return $this->hasMany(Player::class);
    }

    public function matchesAsTeam1()
    {
        return $this->hasMany(Matche::class, 'team1_id');
    }

    public function matchesAsTeam2()
    {
        return $this->hasMany(Matche::class, 'team2_id');
    }

    public function classements(){
        return $this->hasOne(Classement::class);
    }
}
