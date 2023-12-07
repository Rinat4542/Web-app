<?php

namespace App\Http\Controllers;


use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function createProjectForm()
    {
        return view('pages.create_project_form');
    }

    public function showAllProjects()
    {
        $projects = Project::all();

        return view('pages.allprojects', ['projects' => $projects]);
    }

    public function showProject($slug)
    {
        $projectItem = Project::query()->where('slug', $slug)->first();

        if (is_null($projectItem)) {
            return abort(404);
        }

        return view('pages.project', [

            'project' => $projectItem
        ]);
    }

    public function showAllHouses($project)
    {
        $projectItem = Project::find($project);

        if (is_null($projectItem)) {
            return abort(404);
        }

        return view('pages.houses', [

            'project' => $projectItem
        ]);
    }


    public function updateProject(Project $project)
    {
        return view('pages.project_edit_form', ['project' => $project]);
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|min:1|max:25',
            'slug' => 'required|string|min:1|unique:projects'
        ]);

        $project->name = $request->input('name');
        $project->slug = Str::slug($request->slug);
        $project->save();

        return redirect()->route('allprojects');
    }

    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->route('allprojects');
    }
}
