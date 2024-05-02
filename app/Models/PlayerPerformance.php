<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerPerformance extends Model
{
    protected $fillable = [
        'player_id',
        'club_id',
        'total_goal',
        'total_assist',
        'total_yellow_card',
        'total_red_card',
        'total_shot',
        'total_pass',
        'total_tackle',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function league()
    {
        return $this->belongsTo(League::class);
    }
}
