<?php

namespace App\Http\Controllers;


use App\Models\Project;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function createHouseForm()
    {
        return view('pages.create_house_form');
    }


    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:1|max:25',
            'deadline' => 'required',
            'project_id' => 'required|numeric'
        ]);

        $house = new House();
        $house->name = $request->input('name');
        $house->deadline = $request->input('deadline');
        $house->project_id = $request->input('project_id');
        $house->save();

        return redirect()->back();
    }

    public function showHouse($project, $house)
    {
        $house = House::find($house);

        return view('pages.house', [

            'house' => $house,
            'project' => $project
        ]);
    }


    public function updateHouse(Project $project, House $house)
    {
        return view('pages.house_edit_form', compact('project', 'house'));
    }

    public function update(Request $request, Project $project, House $house)
    {
        $request->validate([
            'name' => 'required|string|min:1|max:25',
            'deadline' => 'required',
            'project_id' => 'required|numeric'
        ]);

        $house->name = $request->input('name');
        $house->deadline = $request->input('deadline');
        $house->project_id = $request->input('project_id');
        $house->save();

        return redirect()->route('show.houses', ['project' => $project]);
    }

    public function delete(Project $project, House $house)
    {
        $house->delete();
        return redirect()->route('show.houses', ['project' => $project]);
    }
}
