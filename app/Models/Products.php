<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasUuids;
    protected $fillable = ['name', 'description', 'price','stock'];
    public function orders()
    {
        return $this->belongsToMany(products_orders::class, 'products_orders', 'products_id', 'orders_id')
            ->withPivot('quantite', 'prix')
            ->withTimestamps();
    }

}