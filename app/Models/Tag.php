<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id'
    ];
    public $timestamps = false;

    public function brokers(): BelongsToMany
    {
        return $this->belongsToMany(Broker::class, 'broker_tag', 'tag_id', 'broker_id');
    }
}
