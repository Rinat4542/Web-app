<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AllProjectController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:1|max:25',
            'slug' => 'required|string'
        ]);


        $project = new Project();
        $project->name = $request->input('name');
        $project->slug = Str::slug($request->slug);
        $project->save();


        return redirect()->route('allprojects', [
            'project' => $project->id
        ]);
    }
}
