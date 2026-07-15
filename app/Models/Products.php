<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //CRUD DES PRODUITS, AVEC ROUTE
    public function products(){
        return $this-> belongsToMany(Products::class, 'products_order');
        // return $this-> withPivot('enrolled_at');
        // return $this-> withoutTimestamps();
    }
}