<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballLineup extends Model
{
    use HasFactory;

    protected $fillable = [
        'jersey_number',
        'player_name',
        'position',
        'captain',
        'reason_for_substitution',
    ];

    // Define any relationships or additional methods here
}
