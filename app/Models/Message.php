<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;
    protected $table = 'messages';

    public function broker(): BelongsTo
    {
        return $this->belongsTo(Broker::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}


