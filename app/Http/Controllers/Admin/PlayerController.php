<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Player::with('team')->get();
        return view('admin.players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        return view('admin.players.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullName' => 'required|string',
            'age' => 'required|integer|min:15|max:45',
            'number' => 'required|integer',
            'position' => 'required',
            'nationality' => 'required',
            'team_id' => 'required|exists:teams,id',
        ]);

        Player::create($validatedData);
        return redirect()->route('admin.players.index');
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
        $player = Player::find($id);
        $teams = Team::all();
        return view('admin.players.edit', compact('player', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $player=Player::find($id);
        $validatedData = $request->validate([
            'fullName' => 'required',
            'age' => 'required|integer|min:10|max:50',
            'number' => 'required|integer|min:1|max:99',
            'position' => 'required|',//in
            'nationality' => 'required',
            'team_id' => 'required|exists:teams,id',
        ]);

        $player->update($validatedData);
        return redirect()->route('admin.players.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $player = Player::find($id);
        $player->delete();
        return redirect()->route('admin.players.index');
    }
}
