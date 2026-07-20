<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Order extends Model
{
    use HasUuids;
    protected $fillable = ['order_number','order_date','total_amount','status'];

    public function produit() {
        return $this->belongsToMany(Products::class)->withPivot('quantite','prix')->withTimestamps();
    }

    public function totalPrice() {
        $this->quantite * $this->prix;
    }
}
