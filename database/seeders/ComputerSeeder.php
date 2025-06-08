<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\computer;
class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  $computers = [
    ['number' => '20', 'brand' => 'Dell'],
    ['number' => '50', 'brand' => 'HP'],
    ['number' => '30', 'brand' => 'Lenovo'],
    ['number' => '50', 'brand' => 'Apple'],
    ['number' => '80', 'brand' => 'Asus'],
];

foreach ($computers as $computer) {
    Computer::create($computer);
}


    }
}
