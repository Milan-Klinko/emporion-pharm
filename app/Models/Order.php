<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_number',
        'customer_name',
        'customer_address',
        'delivery_date',
        'delivery_time',
        'total',
        'voucher_code',
        'note',
        'gift_selected',
        'status',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'delivery_date' => 'date',
            'total' => 'decimal:2',
            'gift_selected' => 'boolean',
        ];
    }
    public function items()
{
    return $this->hasMany(OrderItem::class);
}
}
