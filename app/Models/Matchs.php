<?php
// App\Models\Game.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class matchs extends Model
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
}
