<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Products::insert([
        [
        'id' => Str::uuid(),
        'name' => 'pc',
        'description' => 'very good product',
        'price' => 1000,
        'stock' => 20,
        'created_at' => now(),
        'updated_at' => now(),
        ],
                [
        'id' => Str::uuid(),
        'name' => 'usb',
        'description' => 'bien',
        'price' => 2000,
        'stock' => 15,
        'created_at' => now(),
        'updated_at' => now(),
        ],
                [
        'id' => Str::uuid(),
        'name' => 'unité centrale',
        'description' => 'très bien',
        'price' => 3000,
        'stock' => 10,
        'created_at' => now(),
        'updated_at' => now(),
        ],
                [
        'id' => Str::uuid(),
        'name' => 'ram',
        'description' => 'good',
        'price' => 4000,
        'stock' => 12,
        'created_at' => now(),
        'updated_at' => now(),
        ],
      ]);
    }
}
