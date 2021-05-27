<?php

namespace App\Http\Controllers;

use App\Model\Fixture;
use App\Model\Player;
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

        $fixtures = Fixture::orderBy('round', 'asc')->get();
        return view('fixture', compact('fixtures'));

    }
    public function teams() {
        
        $teams = Team::orderBy('round', 'asc')->get();
        return view('teams', compact('teams'));
    }


    public function rounds() {
        
        $rounds = Round::all();
        return view('round.list', compact('rounds'));
    }
    public function roundnew() {
        return view('round.new');
    }
    public function roundedit($id) {
        
        $round = Round::find($id);
        return view('round.edit', compact('round', 'id'));
    }
    public function roundupdate(Request $request) {

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
    public function roundnewsave(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'roundno' => 'required|string',
            'ended' => 'required|string',
        ]);

        $new = new Round();
        $new->roundno = $request->roundno;
        $new->ended = $request->ended;
        $new->save();

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        return redirect()->route("rounds");

    }

    public function players() {
        
        $players = Player::orderBy('round', 'asc')->get();
        return view('player.list', compact('players'));
    }
    public function playernew() {
        return view('player.new');
    }

    public function playeredit($id) {
        
        $player = Player::find($id);
        return view('player.edit', compact('player', 'id'));
    }

    public function playerupdate(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'name' => 'required|string',
            'team' => 'required|string',
            'round' => 'required|string',
            'position' => 'required|string',
            'value' => 'required|string',
        ]);

        $data = ([
            'name' => $request->name,
            'team' => $request->team,
            'round' => $request->round,
            'position' => $request->position,
            'value' => $request->value,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $updated = Player::where('id', $request->id)->update($data);

        return redirect()->route("players");

    }
    public function playernewsave(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'name' => 'required|string',
            'team' => 'required|string',
            'round' => 'required|string',
            'position' => 'required|string',
            'value' => 'required|string',
        ]);

        $new = new Player();
        $new->name = $request->name;
        $new->team = $request->team;
        $new->round = $request->round;
        $new->position = $request->position;
        $new->value = $request->value;
        $new->save();

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($new->id) {
            return redirect()->route("players");
        } else {
            return redirect()->back()->withInput();
        }

    }
    
}
