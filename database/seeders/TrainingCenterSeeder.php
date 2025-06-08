<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\training_center;
class TrainingCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $trainingCenters = [
    ['name' => 'Centro de Innovación', 'location' => 'Bogotá'],
    ['name' => 'Academia Digital', 'location' => 'Medellín'],
    ['name' => 'Instituto Técnico', 'location' => 'Cali'],
    ['name' => 'Centro de Formación Empresarial', 'location' => 'Barranquilla'],
    ['name' => 'Escuela de Tecnología', 'location' => 'Cartagena'],
];

foreach ($trainingCenters as $center) {
    Training_Center::create($center);
}
    }
}
