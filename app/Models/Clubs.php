<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $fillable = [
        'club_name',
        'club_manager_id',
        'coach_name_id',
        'contact_information',
        'logo',
        'social_media_link',
        'Location',
        'game_type_id',
        'document',
        'description',
        'status',
    ];
    public function club_manager()
    {
        return $this->belongsTo(User::class, 'club_manager_id');
    }

    public function coach()
    {
        return $this->belongsTo(User::class, 'coach_name_id');
    }
    public function gameType()
    {
        return $this->belongsTo(Games::class, 'game_type_id');
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the football lineups associated with the club.
     */
    public function footballLineups()
    {
        return $this->hasMany(FootballLineup::class);
    }
    public function matchs()
    {
        return $this->belongsTo(Matchs::class);
    }
    public function leagues()
    {
        return $this->hasMany(League::class, 'club_id');
}
public function coachs()
{
    return $this->hasMany(Coachs::class);
}
}
