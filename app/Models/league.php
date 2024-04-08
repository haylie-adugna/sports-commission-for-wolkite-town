<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = [
            'match_id',
            'team1_point',
            'team2_point',
            'team1_goal',
            'team2_goal',
            'team1_played',
            'team2_played',
            'team1_win',
            'team2_win',
            'team1_draw',
            'team2_draw',
            'team1_losse',
            'team2_losse',
            'rank',
            'point_difference',
    ];

    public function playerPerformances()
    {
        return $this->hasMany(PlayerPerformance::class);
    }
}
