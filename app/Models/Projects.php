<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $fillable = [
        'project_name',
        'project_manager_id',
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
    public function project_manager()
    {
        return $this->belongsTo(User::class, 'project_manager_id');
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
     * Get the football lineups associated with the project.
     */
    public function footballLineups()
    {
        return $this->hasMany(FootballLineup::class);
    }
    public function matchs()
    {
        return $this->belongsTo(Matchs::class);
    }

}
