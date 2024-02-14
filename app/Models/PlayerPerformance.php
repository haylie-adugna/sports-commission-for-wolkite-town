<?php
use Illuminate\Database\Eloquent\Model;

class PlayerPerformance extends Model
{
    protected $fillable = [
        'player_id',
        'league_id',
        'goals',
        'assists',
        'yellow_cards',
        'red_cards',
        'minutes_played',
        'shots',
        'passes',
        'tackles',
        // Add more attributes as per your requirements
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
