<?php
// app\Models\Contract.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'club_id',
        'start_date',
        'end_date',
        'salary',
        // Add more fields as needed
    ];

    public function contractable()
    {
        return $this->morphTo();
    }

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
