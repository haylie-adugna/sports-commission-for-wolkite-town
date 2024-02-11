<?php
// App\Models\Game.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Rules',
        'Equipment',
        'Duration',
        'Venue',
        'Season',
        'Governing_Body',
        'status',
    ];
}
