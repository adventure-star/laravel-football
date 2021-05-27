<?php

namespace App\Http\Controllers;

use App\Model\Fixture;
use App\Model\Round;
use App\Model\Team;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function fixture() {

        $fixtures = Fixture::all();
        return view('fixture', compact('fixtures'));

    }
    public function teams() {
        
        $teams = Team::all();
        return view('teams', compact('teams'));
    }
    public function rounds() {
        
        $rounds = Round::all();
        return view('rounds', compact('rounds'));
    }
    public function roundedit($id) {
        
        $round = Round::find($id);
        return view('round.edit', compact('round', 'id'));
    }
    public function roundeditsave(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'roundno' => 'required|string',
            'ended' => 'required|string',
        ]);

        $data = ([
            'roundno' => $request->roundno,
            'ended' => $request->ended,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $updated = Round::where('id', $request->id)->update($data);

        return redirect()->route("rounds");

    }
    
}
