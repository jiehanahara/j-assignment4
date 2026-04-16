<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;
use App\Models\Destination;
use Dom\Attr;

class AttractionController extends Controller
{
    public function index(Request $request)
    {
       $keyword = $request->input('search');
        if ($keyword != '') {
            $attractions = Attraction::where('name', 'LIKE', "%$keyword%")->paginate(5);
        } else {
            $attractions = Attraction::orderBy('id')->paginate(5)->withQueryString();
        }
        return view('pages.Attraction.indexAttractions', compact('attractions'));
    }

    public function create()
    {
        $destinations = Destination::all();
         $attractions = Attraction::all();
        return view('pages.Attraction.createAttractions', compact('destinations', 'attractions'));
    } 

    public function store(Request $request)
    {
       $request->validate([
            'destinations_id' => 'required|exists:destinations,id',
            'name' => 'required',
            'description' => 'nullable',
        ]);

        Attraction::create($request->all());
        return redirect()->route('attractions.index')->with('success', 'Attraction created successfully.');
    }

    public function edit(Request $request, $id)
    {
        $destinations= Destination::all();
        $attraction = Attraction::findOrFail($id);
        return view('pages.Attraction.editAttractions', compact('attraction'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'destinations_id' => 'required|exists:destinations,id',
            'name' => 'required',
            'description' => 'nullable',
        ]);
        $attraction = Attraction::findOrFail($id);
        $attraction->update($validated);
        return redirect()->route('attractions.index')->with('success', 'Attraction updated successfully.');

    }

    public function delete($id)
    {
        $attraction = Attraction::find($id);
        if ($attraction) {
            $attraction->delete();
            return redirect()->route('attractions.index')->with('success', 'Attraction deleted successfully.');
        } else {
            return redirect()->route('attractions.index')->with('error', 'Attraction not found.');
        }
    }

    public function show($id)
    {
        $attraction = Attraction::find($id);
        return view(view: 'pages.Attraction.showAttractions', data: compact('attraction'));
    }
 
}
