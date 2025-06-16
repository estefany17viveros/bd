<?php

namespace Database\Seeders;
use App\Models\course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$courses = [
            ['number' => 15.5, 'day' => '2025-06-01'],
            ['number' => 20.0, 'day' => '2025-06-05'],
            ['number' => 18.75, 'day' => '2025-06-10'],
            ['number' => 22.3, 'day' => '2025-06-15'],
            ['number' => 19.9, 'day' => '2025-06-20'],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
