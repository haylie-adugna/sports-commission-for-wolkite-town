<?php
// App\Models\Game.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Matchs extends Model
{
    use HasFactory;

    protected $fillable = [
        'Team1',
        'Team2',
        'Referee',
        'Assistant_Referee1',
        'Assistant_Referee2',
        'Start_time',
        'End_time',
        'Venue',
        'Medical_Support',
        'Commentator',
        'Promoter',
        'Ticket',
        'Recored_Keeping',

    ];
    public function clubs()
    {
        return $this->belongsToMany(Clubs::class);
    }
    public function Team1()
    {
        return $this->belongsTo(Clubs::class, 'Team1');
    }

    public function Team2()
    {
        return $this->belongsTo(Clubs::class, 'Team2');
    }
    public function commentator()
    {
        return $this->belongsTo(User::class, 'Commentator');
    }
    public function Promoter()
    {
        return $this->belongsTo(User::class, 'Promoter');
    }
}
