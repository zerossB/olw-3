<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\OrderSku
 *
 * @property-read \App\Models\Order|null $order
 * @property-read \App\Models\Sku|null $sku
 *
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku withoutTrashed()
 *
 * @mixin \Eloquent
 */
class OrderSku extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'sku_id',
        'quantity',
        'price',
    ];

    public function sku(): BelongsTo
    {
        return $this->belongsTo(Sku::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
