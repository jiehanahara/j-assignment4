<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;

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
        $attractions = Attraction::all();
        return view('pages.Attraction.createAttractions', compact('attractions'));
    }       

    public function store(Request $request)
    {
        Attraction::create($request->all());
        return redirect('/attractions')->with('success', 'Attraction created successfully.');
    }

       public function edit($id)
    {
        $attraction = Attraction::findOrFail($id);
        if ($attraction) {
            return view('pages.Attraction.editAttractions', compact('attraction'));
        }
    }

    public function update(Request $request, $id)
    {
        $attraction = Attraction::find($id);
        if ($attraction) {
            $attraction->update($request->all());
            return redirect('/attractions')->with('success', 'Attraction updated successfully.');
        } else {
            return redirect('/attractions')->with('error', 'Attraction not found.');
        }
    }

    public function delete($id)
    {
        $attraction = Attraction::find($id);
        if ($attraction) {
            $attraction->delete();
            return redirect('/attractions')->with('success', 'Attraction deleted successfully.');
        } else {
            return redirect('/attractions')->with('error', 'Attraction not found.');
        }
    }

    public function show($id)
    {
        $attraction = Attraction::find($id);
        return view(view: 'pages.Attraction.showAttractions', data: compact('attraction'));
    }
 
}
