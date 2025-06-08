<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Area;
class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
    'Oficina',
    'Diseño Gráfico',
    'Centro de Datos',
    'Educación',
    'Ingeniería',
];

foreach ($areas as $name) {
    Area::create(['name' => $name]);
}

    }
}
