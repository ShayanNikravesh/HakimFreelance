<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['broker_id', 'user_id', 'comment'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function broker()
    {
        return $this->belongsTo(Broker::class);
    }
}
