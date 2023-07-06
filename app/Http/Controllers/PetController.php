<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();

        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        return view('pets.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'type' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'blood_group' => 'required',
        ]);

        Pet::create($validatedData);

        return redirect()->route('pets.index')->with('success', 'Pet added successfully.');
    }

    public function edit(Pet $pet)
    {
        return view('pets.edit', compact('pet'));
    }

    public function update(Request $request, Pet $pet)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'type' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'blood_group' => 'required',
        ]);

        $pet->update($validatedData);

        return redirect()->route('pets.index')->with('success', 'Pet updated successfully.');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();

        return redirect()->route('pets.index')->with('success', 'Pet deleted successfully.');
    }
}
