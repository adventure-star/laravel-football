<?php

namespace App\Http\Controllers;

use App\Model\Fixture;
use App\Model\Player;
use App\Model\QInput;
use App\Model\Question;
use App\Model\Round;
use App\Model\Team;
use App\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
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

    public function users() {
        
        $users = User::where('isadmin', "!=", 1)->get();
        return view('user.list', compact('users'));
    }

    public function fixture() {

        $fixtures = Fixture::orderBy('round', 'asc')->get();
        return view('fixture.list', compact('fixtures'));

    }
    public function fixtureedit($id) {
        
        $fixture = Fixture::find($id);
        return view('fixture.edit', compact('fixture', 'id'));
    }
    public function fixtureupdate(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'round' => 'required|string',
            'group' => 'required|string',
            'teama' => 'required|string',
            'teamb' => 'required|string',
            'date' => 'required|string',
            'cet' => 'required|string',
        ]);

        $data = ([
            'round' => $request->round,
            'group' => $request->group,
            'teama' => $request->teama,
            'teamb' => $request->teamb,
            'date' => $request->date,
            'cet' => $request->cet,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $updated = Fixture::where('id', $request->id)->update($data);

        return redirect()->route("fixtures");

    }
    public function fixturenew() {
        return view('fixture.new');
    }
    public function fixturenewsave(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'round' => 'required|string',
            'group' => 'required|string',
            'teama' => 'required|string',
            'teamb' => 'required|string',
            'date' => 'required|string',
            'cet' => 'required|string',
        ]);

        $new = new Fixture();
        $new->round = $request->round;
        $new->group = $request->group;
        $new->teama = $request->teama;
        $new->teamb = $request->teamb;
        $new->date = $request->date;
        $new->cet = $request->cet;
        $new->save();

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($new->id) {
            return redirect()->route("fixtures");
        } else {
            return redirect()->back()->withInput();
        }

    }

    public function question() {

        $questions = Question::all()->groupBy('round');

        $roundwithoutquestions = [];
     
        $rounds = Round::all();

        for($x = 0 ; $x < count($rounds) ; $x++) {

            print_r($rounds[$x]['id']);

            $state = true;

            for($y = 1 ; $y <= count($questions) ; $y++) {
                if($rounds[$x]['id'] == $questions[$y][0]['round']) {
                    $state = false;
                }
            }

            if($state) {
                array_push($roundwithoutquestions,$rounds[$x]['id'] );
            }

        }
        return view('question.list', compact('questions', 'roundwithoutquestions'));

    }
    public function questionedit($id) {
        
        $question = Question::find($id);
        return view('question.edit', compact('question', 'id'));
    }
    public function questionupdate(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'text' => 'required|string'
        ]);

        $data = ([
            'text' => $request->text
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $updated = Question::where('id', $request->id)->update($data);

        return redirect()->route("questions.round.edit", Question::find($request->id)['round'] );

    }
    public function questionanswers($id) {
        
        $question = Question::find($id);
        return view('question.answers', compact('question', 'id'));
    }
    public function questionroundedit($id) {
        
        $questions = Question::where('round', '=', $id)->get();
        return view('question.roundedit', compact('questions', 'id'));
    }
    public function questiondelete(Request $request) {

        $deleted = Question::find($request->id)->delete();
        return $deleted;

    }
    public function questionnew($id) {
        return view('question.new', compact('id'));
    }
    public function questionnewsave(Request $request) {

        $questions = Question::where('round', '=', $request->round)->get();

        if(count($questions) >= 5) {
            return redirect()->back()->withInput();
        }

        $validator = Validator::make($request->all(),
        [
            'number' => 'required|string',
            'text' => 'required|string',
        ]);

        $new = new Question();
        $new->round = $request->round;
        $new->number = $request->number;
        $new->text = $request->text;
        $new->save();

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($new->id) {
            return redirect()->route("questions.round.edit", $request->round);
        } else {
            return redirect()->back()->withInput();
        }

    }
    public function qinputdelete(Request $request) {

        $deleted = QInput::find($request->id)->delete();
        return $deleted;

    }
    public function qinputedit($id) {

        $qinput = QInput::find($id);
        return view('qinput.edit', compact('qinput', 'id'));

    }
    public function qinputupdate(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'input' => 'required|string'
        ]);

        $data = ([
            'input' => $request->input
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $updated = QInput::where('id', $request->id)->update($data);

        return redirect()->route("questions.answers", QInput::find($request->id)->qid);

    }
    public function qinputnew($id) {
        return view('qinput.new', compact('id'));
    }
    public function qinputnewsave(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'qid' => 'required|string',
            'input' => 'required|string',
        ]);

        $new = new QInput();
        $new->qid = $request->qid;
        $new->input = $request->input;
        $new->save();

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($new->id) {
            return redirect()->route("questions.answers", $request->qid);
        } else {
            return redirect()->back()->withInput();
        }

    }
}
