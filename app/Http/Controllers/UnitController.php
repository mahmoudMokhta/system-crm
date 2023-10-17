<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\UnitPhoto;
use Illuminate\Http\Request;


class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $units = Unit::with('photos')->get();

        return view('units.index', ['units' => $units]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('units.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'unit_number' => 'required',
            'building_number' => 'required',
            'street_name' => 'required',

            'city' => 'required',
            'type' => 'required',
            'price' => 'required',

            'square_feet' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'garage' => 'nullable',
            'pool' => 'nullable',
            'description' => 'nullable',
            'image.*' => 'required|image|max:2048',
        ]);
        // dd($request->file('image'));

        $unit = Unit::create($data);
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $photo) {
                $photoPath = $photo->store('public/images');
                UnitPhoto::create([
                    'unit_id' => $unit->id,
                    'photo_path' => $photoPath,
                ]);
            }
        }

        return redirect()->route('allUnits')->with('success', 'unit has been successfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unit = Unit::with('photos')->findOrFail($id);

        return view('units.show', ['unit' => $unit]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unit = Unit::with('photos')->findOrFail($id);
        return view('units.edit', ['unit' => $unit]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'unit_number' => 'required',
            'building_number' => 'required',
            'street_name' => 'required',
            'city' => 'required',
            'type' => 'required',
            'price' => 'required',
            'square_feet' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'garage' => 'nullable',
            'pool' => 'nullable',
            'description' => 'nullable'
        ]);
        $unit = Unit::findOrFail($id);
        $unit->update($data);
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $photo) {
                $photoPath = $photo->store('public/images');
                UnitPhoto::create([
                    'unit_id' => $unit->id,
                    'photo_path' => $photoPath,
                ]);
            }
        }
        return redirect()->route('allUnits')->with('success', 'unit has been successfully updated.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the unit  and his image
        $unit = Unit::with('photos')->findOrFail($id);
        $unit->photos()->delete();
        $unit->delete();

        return redirect()->route('allUnits')->with('failure', 'unit has been Deleted.');
    }
}
