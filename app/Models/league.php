<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = [
            'match_id',
            'club_id',
            'total_point',
            'total_goal',
            'total_played',
            'total_win',
            'total_draw',
            'total_losse',
            'rank',
            'point_difference',
    ];

    public function playerPerformances()
    {
        return $this->hasMany(PlayerPerformance::class);
    }
}
