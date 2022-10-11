<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Membership;
use App\Models\User;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = response()->json(Membership::all());
        return $memberships;
    }
    public function show($id)
    {
        $membership = response()->json(Membership::find($id));
        return $membership;
    }
    public function store(Request $request)
    {
        $membership = new Membership();
        $membership->establishment = $request->establishment;
        $membership->location = $request->location;
        $membership->max_number = $request->max_number;
        $membership->save();
    }

    public function destroy($id)
    {
        $membership = Membership::find($id);
        $membership->delete();
    }
    public function listView()
    {
        $memberships = Membership::all();
        return view('membership.list', ['memberships' => $memberships]);
    }
    public function newView()
    {
        $users = User::all();
        $clubs = Club::all();
        // return view('membership.new', ['users' => $users], ['clubs' = $clubs]);
    }
    public function destroyView()
    {
        $memberships = Membership::all();
        return view('membership.destroy', ['memberships' => $memberships]);
    }
}
