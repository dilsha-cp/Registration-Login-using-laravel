<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class studentTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        student::insert([
            'id'=>1,
            'name' => 'John',
            'email' => 'john@gmail.com',
            'address'=>'cheeniparambil',
            'password' => '12345678',
        ]);
    }
}
