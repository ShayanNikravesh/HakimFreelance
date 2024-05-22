<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Broker extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'f_name',
        'l_name',
        'mobile',
        'gender',
        'national_code',
        'desc',
        'address',
        'photo',
        'password',
        'status'
    ];
    protected $table = 'brokers';
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'broker_tag', 'broker_id', 'tag_id');
    }
}
