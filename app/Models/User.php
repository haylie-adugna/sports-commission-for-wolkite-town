<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded=[];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone_number',
        'password',
        'verified',
        'email_verified_at',
        'user_type',
        'age',
        'gender',
        'date_of_birth',
        'address',
        'country',
        'nationality',
        'city',
        'language',
        'photo',
        'experience',
        'mother_full_name',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'verified' => 'boolean',
    ];

    /**
     * Get the user type that owns the user.
     */
   
    public function roles()
    {
        return $this->belongsToMany(Role::class);

    }
    public function __construct()
    {
        self::created(function (self $user) {
            $registrationRole = '9';
                if (! $user->roles()->get()->contains($registrationRole)) {
                    $user->roles()->attach($registrationRole);
                }
        });
    }

    public function clubsAsManager()
    {
        return $this->hasMany(Clubs::class, 'club_manager_id');
    }

    public function clubsAsCoach()
    {
        return $this->hasMany(Clubs::class, 'coach_name_id');
    }
    public function club()
    {
        return $this->belongsTo(Clubs::class);
    }


    // Additional methods, relationships, or custom logic can be added here.
}
