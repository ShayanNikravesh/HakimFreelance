<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Binafy\LaravelUserMonitoring\Traits\Actionable;

class Manager extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Actionable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'level',
        'password',
    ];
}
