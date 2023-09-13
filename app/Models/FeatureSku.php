<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\FeatureSku
 *
 * @property int $id
 * @property int $sku_id
 * @property int $feature_id
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Feature $feature
 * @property-read \App\Models\Sku $sku
 *
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku query()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku whereFeatureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku whereSkuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureSku withoutTrashed()
 *
 * @mixin \Eloquent
 */
class FeatureSku extends Pivot
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
