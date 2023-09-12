<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\FeatureSku
 *
 * @property-read \App\Models\Feature|null $feature
 * @property-read \App\Models\Sku|null $sku
 *
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku query()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku withoutTrashed()
 *
 * @mixin \Eloquent
 */
class FeatureSku extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'feature_id',
        'sku_id',
        'value',
    ];

    public function sku(): BelongsTo
    {
        return $this->belongsTo(Sku::class);
    }

    public function feature(): BelongsTo
    {
        return $this->belongsTo(Feature::class);
    }
}
