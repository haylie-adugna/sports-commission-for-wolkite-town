<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'Tittle',
        'Type',
        'Body',
        'image',
        'video',
        'created_by',
        'status',

    ];
    public function event()
{
    return $this->belongsTo(Events::class); // Adjust accordingly based on your implementation
}
public function user()
{
    return $this->belongsTo(User::class); // Adjust accordingly based on your implementation
}
}
