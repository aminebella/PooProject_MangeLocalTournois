<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Classement;
use App\Models\Team;

class ClassementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classements = Classement::with('team')->orderBy('points', 'desc')->get();
        return view('admin.classements.index', compact('classements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::doesntHave('classement')->get();
        return view('admin.classements.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'team_id' => 'required|exists:teams,id|unique:classements',
        ]);

        Classement::create([
            'team_id' => $request->team_id,
            'match_played' => 0,
            'win' => 0,
            'lose' => 0,
            'tied' => 0,
            'points' => 0,
            'goals' => 0,
        ]);

        return redirect()->route('classements.index');
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
        return view('admin.classements.edit', compact('classement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'match_played' => 'required|integer|min:0',
            'win' => 'required|integer|min:0',
            'lose' => 'required|integer|min:0',
            'tied' => 'required|integer|min:0',
            'points' => 'required|integer|min:0',
            'goals' => 'required|integer|min:0',
        ]);

        $classement->update($request->all());
        return redirect()->route('admin.classements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement->delete();
        return redirect()->route('admin.classements.index');
    }
}
