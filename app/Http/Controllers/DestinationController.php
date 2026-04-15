<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;



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
        return view('pages.Destination.editDestinations', compact('destination'));
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