<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Feature
 *
 * @property int $id
 * @property string $name
 * @property string|null $unit
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature withoutTrashed()
 *
 * @mixin \Eloquent
 */
class Feature extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'unit',
    ];

    public function skus(): BelongsToMany
    {
        return $this->belongsToMany(Sku::class)
            ->using(FeatureSku::class)
            ->withPivot('value');
    }
}
