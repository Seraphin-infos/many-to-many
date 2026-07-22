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
            'id' => Str::uuid(),
            'name' => 'Ordinateur portable',
            'description' => 'Ordinateur portable performant pour le travail et les études',
            'price' => 2500000,
            'stock' => 10,
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
    }
}
