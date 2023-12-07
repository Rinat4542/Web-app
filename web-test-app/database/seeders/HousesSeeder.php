<?php

namespace Database\Seeders;

use App\Models\House;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $porjects = Project::all();

        foreach ($porjects as $porject) {
            House::insert([
                [
                    'project_id' => $porject->id,
                    'name' => 'ЖК Новый1',
                    'deadline' => now()
                ],
                [
                    'project_id' => $porject->id,
                    'name' => 'ЖК Новый2',
                    'deadline' => now()
                ],
                [
                    'project_id' => $porject->id,
                    'name' => 'ЖК Новый3',
                    'deadline' => now()
                ],
            ]);
        }
    }
}
