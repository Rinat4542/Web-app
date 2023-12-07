<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::query()
            ->select(['name'])
            ->get();

        return $projects;
    }


    public function show(Project $project)
    {
        return [
            'name' => $project->name,
            'houses' => $project->houses->map(function ($house) {
                return [
                    'name' => $house->name
                ];
            })
        ];
    }
}
