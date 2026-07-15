<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Order extends Model
{
    protected $fillable = ['order_number','order_date','total_amount','status'];

    public function produit() {
        return $this->belongsToMany(Products::class);
    }

    public function total() {
        $this->quantity * $this->price;
    }
}
