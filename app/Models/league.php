<?php
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $fillable = [
        'name',
        'points',
        'goals',
        'matches_played',
        'wins',
        'draws',
        'losses',
        'rank',
        'point_difference',
        // Add more attributes as per your requirements
    ];

    public function playerPerformances()
    {
        return $this->hasMany(PlayerPerformance::class);
    }
}
