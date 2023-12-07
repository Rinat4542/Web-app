<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::insert([
            [
                'name' => 'Проект 1',
                'slug' => 'test'
            ],
            [
                'name' => 'Проект 2',
                'slug' => 'test'
            ],
            [
                'name' => 'Проект 3',
                'slug' => 'test'
            ]
        ]);
    }
}
