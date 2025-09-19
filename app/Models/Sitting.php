<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sitting extends Model
{
    /** @use HasFactory<\Database\Factories\SittingFactory> */
    use HasFactory;

    use HasUuids;
    use SoftDeletes;

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    protected $with = [
        'dough',
    ];

    public function dough(): BelongsTo
    {
        return $this->belongsTo(Dough::class);
    }

    public function user(): BelongsTo
    {
        return $this->dough->user();
    }
}
