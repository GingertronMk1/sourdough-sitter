<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Date;

/**
 * @property string $id
 * @property string $name
 * @property int $months_old
 * @property string $user_id
 * @property Date $created_at
 * @property Date $updated_at
 * @property Date $deleted_at
 */
class Dough extends Model
{
    /** @use HasFactory<\Database\Factories\DoughFactory> */
    use HasFactory;

    use HasUuids;
    use SoftDeletes;

    protected $with = [
        'user',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sittings(): HasMany
    {
        return $this->hasMany(Sitting::class)->orderBy('start_date');
    }

    public function nextSitting(): HasOne
    {
        return $this->hasOne(Sitting::class)->latestOfMany('start_date');
    }
}
