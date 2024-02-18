<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venues extends Model
{
    use HasFactory;

    protected $fillable = [
        'venue_name',
        'description',
        'address',
        'capacity',
        'facilities',
        'layout',
        'availability',
        'contact_information',
        'accessibility',
        'cost',
        'booking',
        'technical_specifications',
        'rules_and_regulations',
    ];

    // Add any relationships or additional methods as needed
}
