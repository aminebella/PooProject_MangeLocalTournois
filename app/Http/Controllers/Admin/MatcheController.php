<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Matche;
use App\Models\Team;

class MatcheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matches = Matche::with(['team1', 'team2'])->get();
        return view('admin.matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        return view('admin.matches.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'team1_id' => 'required|different:team2_id|exists:teams,id',
            'team2_id' => 'required|exists:teams,id',
            'kickoff_time' => 'required|date|unique:matches,kickoff_time',
            'status' => 'required|in:schedule,finished',
            'score_team1' => 'nullable|integer|min:0',
            'score_team2' => 'nullable|integer|min:0',
        ]);

        Matche::create($validatedData);
        return redirect()->route('matches.index');
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
        $matche = Matche::find($id);
        $teams = Team::all();
        return view('admin.matches.edit', compact('matche', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'team1_id' => 'required|different:team2_id|exists:teams,id',
            'team2_id' => 'required|exists:teams,id',
            'kickoff_time' => 'required|date|unique:matches,kickoff_time,' . $match->id,
            'status' => 'required|in:schedule,finished',
            'score_team1' => 'nullable|integer|min:0',
            'score_team2' => 'nullable|integer|min:0',
        ]);

        $match->update($validatedData);
        return redirect()->route('matches.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matche= Matche::find($id);
        $matche->delete();
        return redirect()->route('matches.index');
    }
}
