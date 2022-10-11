<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = response()->json(Club::all());
        return $clubs;
    }
    public function show($id)
    {
        $club = response()->json(Club::find($id));
        return $club;
    }
    public function store(Request $request)
    {
        $club = new Club();
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
    }

    public function destroy($id)
    {
        $club = Club::find($id);
        $club->delete();
    }
    public function listView()
    {
        $clubs = Club::all();
        return view('club.list', ['clubs' => $clubs]);
    }
    public function newView()
    {
        return view('club.new');
    }
    public function destroyView()
    {
        $clubs = Club::all();
        return view('club.destroy', ['clubs' => $clubs]);
    }
}
