<?php
// App\Models\Game.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_type',
        'description',
        'game_category',
        'rules',
        'duration',
        'player',
        'venue',
        'equipment',
        'season',
        'governing_body',
    ];
}
