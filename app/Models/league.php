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

    public  static function boot()
    {
        parent::boot();

        static::saving(function($leagues){
            $leagues->total_point = ($leagues->total_win * 3) + ($leagues->total_draw);
        });
    }
    public static function calculateRank()
{
    $clubs = League::orderByDesc('total_point')
                   ->orderByDesc('total_goal')
                   ->get();

    // Find the maximum total goals and total points among all clubs
    $maxTotalGoals = $clubs->max('total_goal');
    $maxTotalPoints = $clubs->max('total_point');

    // Initialize variables
    $rank = 1;
    $previousClub = null;

    // Update ranks and store them in the database
    foreach ($clubs as $club) {
        // Check if this club has the same total points and total goals as the previous club
        if ($previousClub !== null && $club->total_point === $previousClub->total_point && $club->total_goal === $previousClub->total_goal) {
            // If yes, assign the same rank as the previous club
            $club->rank = $previousClub->rank;
        } else {
            // If no, assign the current rank
            $club->rank = $rank;
            // Update rank for the next club
            $rank++;
        }

        // Calculate goal difference and point difference
        $club->goal_difference = $maxTotalGoals - $club->total_goal;
        $club->point_difference = $maxTotalPoints - $club->total_point;

        $club->save();
        // Update previous club for the next iteration
        $previousClub = $club;
    }
}

}
