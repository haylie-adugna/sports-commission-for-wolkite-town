<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolleyballLineup extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $fillable = [
        'jersey_number',
        'player_id',
        'position',
        'captain',
        'reason_for_substitution',
        'club_id',
    ];
    public function club()
    {
        return $this->belongsTo(Clubs::class, 'id');
    }
    public function user()
{
    return $this->belongsTo(User::class, 'player_id');
}
// FootballLineup.php

public function clubs()
{
    return $this->belongsTo(Clubs::class, 'club_id');
}


    // Define any relationships or additional methods here
}
