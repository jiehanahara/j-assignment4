<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword != '') {
            $users = User::where('name', 'LIKE', "%$keyword%")->paginate(5);
        } else {
            $users = User::orderBy('id')->paginate(5)->withQueryString();
        }
        return view('pages.indexUser', compact('user s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.createUser');    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/User')->with('success', 'User created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        if ($user) {
            return view('pages.editUser', compact('user'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->update($request->all());
            return redirect('/User')->with('success', 'User updated successfully.');
        } else {
            return redirect('/User')->with('error', 'User not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect('/User')->with('success', 'User deleted successfully.');
        } else {
            return redirect('/User')->with('error', 'User not found.');
        }
    }
}
