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
        'player_id',
        'expires_at',
        'action',
        // Add more attributes as per your requirements
    ];

    public function playerPerformances()
    {
        return $this->hasMany(PlayerPerformance::class);
    }
    
}
