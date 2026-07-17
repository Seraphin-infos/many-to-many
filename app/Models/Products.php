<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['name', 'description', 'price'];
    public function orders()
    {
        return $this->belongsToMany(products_orders::class, 'products_orders', 'products_id', 'orders_id')
            ->withPivot('quantite', 'prix')
            ->withTimestamps();
    }

}