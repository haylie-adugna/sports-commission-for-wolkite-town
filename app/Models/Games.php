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
        'start_date',
        'end_date',
        'number_of_player',
        'equipment',
        'governing_body',
    ];
    public function clubs()
    {
        return $this->hasMany(Club::class, 'game_type_id');
    }
}
