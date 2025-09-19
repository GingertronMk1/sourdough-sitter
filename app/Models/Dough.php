<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dough extends Model
{
    /** @use HasFactory<\Database\Factories\DoughFactory> */
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $with = [
        'user',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sittings(): HasMany
    {
        return $this->hasMany(Sitting::class);
    }
}
