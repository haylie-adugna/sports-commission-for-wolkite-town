<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Games;


class Games extends Model
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
