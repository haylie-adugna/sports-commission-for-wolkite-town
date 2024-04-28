<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = [
            'club_id',
            'total_point',
            'total_goal',
            'total_played',
            'total_win',
            'total_draw',
            'total_lost',
            'rank',
            'point_difference',
    ];

    public function playerPerformances()
    {
        return $this->hasMany(PlayerPerformance::class);
    }
    public function clubs()
    {
        return $this->belongsTo(Clubs::class, 'id');
    }
    public function getMatchesPlayedAttribute()
    {
        return $this->total_win + $this->total_draw + $this->total_lost;
    }

    public function getgoalsDifferenceAttribute()
    {
        return $this->total_goal - $this->total_goal_against;
    }

    protected static function boot()
{
    parent::boot();

    static::saving(function ($league) {
        $league->total_point = ($league->total_win * 3) + ($league->total_draw);
        self::calculateRank(); // Call calculateRank() whenever a league is saved
    });
}

    public static function calculateRank()
{
    $leagues = self::orderByDesc('total_point')->get();
    $rank = 1;
    $prevPoint = null;

    foreach ($leagues as $league) {
        if ($prevPoint !== null && $league->total_point < $prevPoint) {
            $rank++;
        }
        $league->update(['rank' => $rank]);
        $prevPoint = $league->total_point;
    }
}

}
