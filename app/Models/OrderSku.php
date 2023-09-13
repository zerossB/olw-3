<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\OrderSku
 *
 * @property int $id
 * @property int $order_id
 * @property int $sku_id
 * @property array $product
 * @property int $quantity
 * @property string $unitary_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Order $order
 * @property-read \App\Models\Sku $sku
 *
 * @method static \Database\Factories\OrderSkuFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku whereSkuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku whereUnitaryPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderSku withoutTrashed()
 *
 * @mixin \Eloquent
 */
class OrderSku extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'sku_id',
        'product',
        'quantity',
        'unitary_price',
    ];

    protected $casts = [
        'product' => 'json',
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
