<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'username',
        'password',
        'is_admin',
        'remaining_time',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getMacAddressAttribute()
    {
        $output = exec("getmac");
        $parts = preg_split('/\s+/', $output);
        return $parts[0];
    }

    public function getIpAddressAttribute()
    {
        return request()->ip();
    }

    public function getRemainingTimeFormattedAttribute()
    {
        if ($this->remaining_time <= 0) {
            return '00:00:00';
        }

        $remainingTimeInSeconds = $this->remaining_time;

        $hours = floor($remainingTimeInSeconds / 3600);
        $minutes = floor(($remainingTimeInSeconds / 60) % 60);
        $seconds = $remainingTimeInSeconds % 60;

        return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
    }
}
