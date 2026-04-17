<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class DestinationController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword != '') {
            $destinations = Destination::where('name', 'LIKE', "%$keyword%")->paginate(5);
        } else {
            $destinations = Destination::orderBy('id')->paginate(5)->withQueryString();
        }
        return view('pages.Destination.indexDestinations', compact('destinations'));
    }

    public function show($id)
    {
        $destination = Destination::find($id);
        return view(view: 'pages.Destination.asiaheritage', data: compact('destination'));
    }

public function create()
{
    return view('pages.Destination.createDestination');
}

public function store(Request $request)
{
     $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'ticket_price' => 'required|numeric',
            'location' => 'required',
            'working_hours' => 'required',
            'working_days' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    $destination = Destination::create($request->all());
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('destinations', 'public');
        $destination->update(['image' => $imagePath]);
    }

    return redirect()->route('destination.index')->with('success', 'Destination created successfully.');
}

public function delete($id)
{
    $destination = Destination::find($id);
    if ($destination) {
        $destination->delete();
        return redirect()->route('destination.index')->with('success', 'Destination deleted successfully.');
    } else {
        return redirect()->route('destination.index')->with('error', 'Destination not found.');
    }
}

public function edit($id)
{
    $destination = Destination::find($id);
    if ($destination) {
        return view('pages.Destination.editDestinations', compact('destination'));
    }
}
    public function update(Request $request, $id)
    {
            $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'ticket_price' => 'required|numeric',
            'location' => 'required',
            'working_hours' => 'required',
            'working_days' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $destination = Destination::find($id);
        if ($destination) {
            if ($destination->image && $request->hasFile('image')) {
                Storage::disk('public')->delete($destination->image);
            }
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('destinations', 'public');
                $validated['image'] = $imagePath;
            }
            $destination->update($validated);
            return redirect()->route('destination.index')->with('success', 'Destination updated successfully.');
        } else {
            return redirect()->route('destination.index')->with('error', 'Destination not found.');
        }
    }
}