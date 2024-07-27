<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class challengeFile extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'challenge_file';

    // public function challenge() 
    // {
    //     return $this->belongsTo(challenge::class);
    // }
}
