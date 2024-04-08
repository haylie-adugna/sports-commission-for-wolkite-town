<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchRecored extends Model
{
    use HasFactory;

    protected $fillable = [
        'match_id',
        'team1_goal',
        'team2_goal',
        'team1_player',
        'team2_player',
        'team1_assistant',
        'team2_assistant',
        'team1_time',
        'team2_time',
        // Add more attributes as per your requirements
    ];

    public function playerPerformances()
    {
        return $this->hasMany(PlayerPerformance::class);
    }
}
