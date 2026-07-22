<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::create([
            'name' => 'Muriellah Randrianasolo',
            'email' => 'muriellah@example.com',
            'phone' => '0340000000',
            'course' => 'Informatique',
        ]);
    }
}