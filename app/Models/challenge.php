<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class challenge extends Model
{
    use HasFactory;

    public function challengeFile() 
    {
        return $this->hasMany(challengeFile::class);
    }

}
