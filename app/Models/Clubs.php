<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    use HasFactory;

    protected $fillable = [
        'club_name',
        'club_manager',
        'coach_name',
        'contact_information',
        'logo',
        'social_media_link',
        'Location',
        'game_category',
        'document',
        'description',
        'status',
    ];
}
