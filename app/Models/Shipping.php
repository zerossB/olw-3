<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Shipping
 *
 * @property int $id
 * @property int $order_id
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zipcode
 * @property string $district
 * @property string $number
 * @property string|null $complement
 * @property string|null $tracking_code
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Order $order
 *
 * @method static \Database\Factories\ShippingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereComplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereTrackingCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereZipcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping withoutTrashed()
 *
 * @mixin \Eloquent
 */
class Shipping extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'address',
        'city',
        'state',
        'zipcode',
        'district',
        'number',
        'complement',
        'tracking_code',
        'status',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
