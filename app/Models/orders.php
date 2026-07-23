<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class orders extends Model
{
 use HasUuids;

    protected $fillable = ['id', 'order_number', 'order_date', 'total_amount', 'status'];
    public function products()
    {
        return $this->belongsToMany(products_orders::class, 'products_orders', 'orders_id', 'products_id')
            ->withPivot('quantite', 'prix')
            ->withTimestamps();
    }
}
