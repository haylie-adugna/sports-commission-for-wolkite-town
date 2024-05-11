<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuessedResult extends Model
{
    protected $fillable = [
        'match_id', 'team1_goals', 'team2_goals','user_id',
    ];

    // Define relationship with the Match model
    public function match()
    {
        return $this->belongsTo(Matchs::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
