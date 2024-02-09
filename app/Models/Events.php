<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Events;


class Events extends Model
{
    use HasFactory;
    protected $fillable = [
        'Tittle',
        'Type',
        'Body',
        'photo',
        'video',
        'Created_by',
        'status',

    ];
}
