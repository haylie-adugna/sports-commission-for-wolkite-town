<?php
// app\Models\Player.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'user_id',
        'club_id',
        'time',
        // Add more fields as needed
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function club()
    {
        return $this->belongsTo(Clubs::class);
    }

    public function contracts()
    {
        return $this->morphMany(Contract::class, 'contractable');
    }
    public function playerperformance()
    {
        return $this->belongsTo(playerperformance::class, 'player_id');
    }
}
