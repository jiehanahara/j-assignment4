<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;



class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view( view: 'pages.indexDestinations', data: compact('destinations'));
    }

    public function show($id)
    {
        $destination = Destination::find($id);
        return view(view: 'pages.asiaheritage', data: compact('destination'));
    }

    public function create()
{
    return view('pages.createDestination');
}

public function store(Request $request)
{
    Destination::create($request->all());

    return redirect('/destinations')->with('success', 'Destination created successfully.');
}

public function delete($id)
{
    $destination = Destination::find($id);
    if ($destination) {
        $destination->delete();
        return redirect('/destinations')->with('success', 'Destination deleted successfully.');
    } else {
        return redirect('/destinations')->with('error', 'Destination not found.');
    }
}

public function edit($id)
{
    $destination = Destination::find($id);
    if ($destination) {
        return view('pages.editDestinations', compact('destination'));
    }
}
    public function update(Request $request, $id)
    {
        $destination = Destination::find($id);
        if ($destination) {
            $destination->update($request->all());
            return redirect('/destinations')->with('success', 'Destination updated successfully.');
        } else {
            return redirect('/destinations')->with('error', 'Destination not found.');
        }
    }
}

