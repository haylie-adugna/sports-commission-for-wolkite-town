<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchRecored extends Model
{
    use HasFactory;

    protected $fillable = [
        'match_id',
        'club_id',
        'team1_goal',
        'number_of_goal',
        'goal_scorer',
        'goal_assistant',
        'goal_time',
        // Add more attributes as per your requirements
    ];

    public function playerPerformances()
    {
        return $this->hasMany(PlayerPerformance::class);
    }
}
