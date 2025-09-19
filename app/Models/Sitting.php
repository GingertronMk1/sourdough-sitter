<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Date;

/**
 * @property string $id
 * @property string $dough_id
 * @property float $feed_frequency_number
 * @property string $feed_frequency_interval
 * @property float $flour_amount_number
 * @property string $flour_amount_unit
 * @property string $flour_type
 * @property float $water_amount_number
 * @property string $water_amount_unit
 * @property string $additional_instructions
 * @property Date $start_date
 * @property Date $end_date
 * @property boolean $confirmed
 * @property Date $created_at
 * @property Date $updated_at
 * @property Date $deleted_at
 */
class Sitting extends Model
{
    /** @use HasFactory<\Database\Factories\SittingFactory> */
    use HasFactory;

    use HasUuids;
    use SoftDeletes;

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'feed_frequency_number' => 'float',
        'flour_amount_number' => 'float',
        'water_amount_number' => 'float',
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
