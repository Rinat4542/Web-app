<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\House;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function apartmentsAvg()
    {
        $stat = Apartment::query()->avg('price');

        return view('pages.avg', ['stat' => $stat]);
    }



    public function createApartmentForm()
    {
        return view('pages.create_apartment_form');
    }


    public function showApartment($apartment)
    {
        $apartment = Apartment::find($apartment);

        return view('pages.apartment', [

            'apartment' => $apartment

        ]);
    }


    public function showAllApartments()
    {
        $apartments = Apartment::paginate(8);


        return view('pages.apartments', [

            'apartments' => $apartments
        ]);
    }

    public function updateApartment(Apartment $apartment)
    {
        return view('pages.apartment_edit_form', ['apartment' => $apartment]);
    }

    public function update(Request $request, Apartment $apartment)
    {
        $request->validate([
            'name' => 'required|string|min:1|max:25',
            'square' => 'required|numeric|min:1',
            'layout' => 'required|numeric|min:1|max:10',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'price' => 'required|numeric|min:1',
            'house_id' => 'required|numeric|min:1',
        ]);

        $apartment->name = $request->input('name');
        $apartment->square = $request->input('square');
        $apartment->layout = $request->input('layout');
        $apartment->price = $request->input('price');
        $apartment->house_id = $request->input('house_id');
        $apartment->save();

        return redirect()->route('show.apartments');
    }


    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:1|max:25',
            'square' => 'required|numeric|min:1',
            'layout' => 'required|numeric|min:1|max:10',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'price' => 'required|numeric|min:1',
            'house_id' => 'required|numeric|min:1',
        ]);

        $imagePath = "/storage/{$request->file('preview')->store('apartments/images')}";

        $apartment = new Apartment();
        $apartment->name = $request->input('name');
        $apartment->square = $request->input('square');
        $apartment->layout = $request->input('layout');
        $apartment->image = $imagePath;
        $apartment->price = $request->input('price');
        $apartment->house_id = $request->input('house_id');
        $apartment->save();

        return redirect()->back();
    }

    public function delete(Apartment $apartment)
    {
        $apartment->delete();
        return redirect()->route('show.apartments');
    }
}
