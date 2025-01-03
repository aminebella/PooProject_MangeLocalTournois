<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams=Team::all();
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $valitedData=$request->validate([
            'name' => 'required|string|unique:teams',
            'logo' => 'nullable|image',
            'coach' => 'required|string|unique:teams',
            'stadium' => 'required|string|unique:teams',
        ]);

        // Team::create($request->all());
        Team::create($valitedData);
        return redirect()->route('teams.index');//admin.
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)//Team $team
    {
        $team=Team::find($id);
        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)//Team $team
    {
        $team=Team::find($id);
        // $valitedData=$request->validate([
        //     'name' => 'required|unique:teams,name,' . $team->id,
        //     'logo' => 'nullable|image',
        //     'coach' => 'required|unique:teams,coach,' . $team->id,
        //     'stadium' => 'required|unique:teams,stadium,' . $team->id,
        // ]);

        $valitedData=$request->validate([
            'name' => 'required|string|unique:teams,name,',
            'logo' => 'nullable|image',
            'coach' => 'required|string|unique:teams,coach,',
            'stadium' => 'required|string|unique:teams,stadium,',
        ]);

        $team->update($valitedData);

        return redirect()->route('teams.index');//admin.
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//Team $team
    {
        $team=Team::find($id);
        $team->delete();
        return redirect()->route('teams.index');//admin.
    }
}
