<?php

namespace App\Http\Controllers;

use App\Model\Fixture;
use App\Model\Player;
use App\Model\QInput;
use App\Model\Question;
use App\Model\RealTeam;
use App\Model\Round;
use App\Model\Team;
use App\User;
use Exception;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function userteamdelete(Request $request) {

        $deleted = Team::find($request->id)->delete();
        return $deleted;

    }


    public function rounds() {
        
        $rounds = Round::all();
        return view('admin.round.list', compact('rounds'));
    }
    public function roundnew() {
        return view('admin.round.new');
    }
    public function roundedit($id) {
        
        $round = Round::find($id);
        return view('admin.round.edit', compact('round', 'id'));
    }
    public function roundupdate(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'roundno' => 'required|string|unique:rounds',
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
    public function roundadd(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'roundno' => 'required|string|unique:rounds',
            'ended' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $new = new Round();
        $new->roundno = $request->roundno;
        $new->ended = $request->ended;
        $new->save();

 
        return redirect()->route("rounds");

    }
    public function rounddelete(Request $request) {

        $deleted = Round::find($request->id)->delete();
        return $deleted;

    }

    public function teams() {
        
        $teams = RealTeam::orderBy('name', 'asc')->get();
        return view('admin.team.list', compact('teams'));
    }
    public function teamnew() {
        return view('admin.team.new');
    }
    public function teamedit($id) {
        
        $team = RealTeam::find($id);
        return view('admin.team.edit', compact('team', 'id'));
    }
    public function teamupdate(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'name' => 'required|string|unique:realteams',
        ]);

        $data = ([
            'name' => $request->name,
        ]);

        if ($validator->fails() && $request->id != RealTeam::where('name', '=',$request->name)->first()->id) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $updated = RealTeam::where('id', $request->id)->update($data);

        return redirect()->route("teams");

    }
    public function teamadd(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'name' => 'required|string|unique:realteams',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $new = new RealTeam();
        $new->name = $request->name;
        $new->save();
  
        return redirect()->route("teams");

    }
    public function teamdelete(Request $request) {

        $deleted = RealTeam::find($request->id)->delete();
        return $deleted;

    }

    public function players() {
        
        $players = Player::orderBy('round', 'asc')->orderBy('team', 'asc')->orderBy('position', 'asc')->get();
        return view('admin.player.list', compact('players'));
    }
    public function playernew() {
        $rounds = Round::all();
        $teams = RealTeam::all();
        return view('admin.player.new', compact('rounds', 'teams'));
    }

    public function playeredit($id) {
        
        $player = Player::find($id);
        $rounds = Round::all();
        $teams = RealTeam::all();

        return view('admin.player.edit', compact('player', 'id', 'rounds', 'teams'));
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
    public function playeradd(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'name' => 'required|string',
            'team' => 'required|string',
            'round' => 'required|string',
            'position' => 'required|string',
            'value' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $new = new Player();
        $new->name = $request->name;
        $new->team = $request->team;
        $new->round = $request->round;
        $new->position = $request->position;
        $new->value = $request->value;
        $new->save();

        if($new->id) {
            return redirect()->route("players");
        } else {
            return redirect()->back()->withInput();
        }

    }
    public function playerdelete(Request $request) {

        $deleted = Player::find($request->id)->delete();
        return $deleted;

    }

    public function users() {
        
        $users = User::where('isadmin', "!=", 1)->get();
        return view('admin.user.list', compact('users'));
    }
    public function userdelete(Request $request) {

        $deleted = User::find($request->id)->delete();
        return $deleted;

    }

    public function fixture() {

        $fixtures = Fixture::orderBy('round', 'asc')->get();
        return view('admin.fixture.list', compact('fixtures'));

    }
    public function fixtureedit($id) {
        
        $fixture = Fixture::find($id);
        $rounds = Round::all();
        $teams = RealTeam::all();

        return view('admin.fixture.edit', compact('fixture', 'id', 'rounds', 'teams'));
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

        if($request->teama == $request->teamb) {
            return redirect()->back()->withInput();
        }

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
        $rounds = Round::all();
        $teams = RealTeam::all();
        return view('admin.fixture.new', compact('rounds', 'teams'));
    }
    public function fixtureadd(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'round' => 'required|string',
            'group' => 'required|string',
            'teama' => 'required|string',
            'teamb' => 'required|string',
            'date' => 'required|string',
            'cet' => 'required|string',
        ]);

        if($request->teama == $request->teamb) {
            return redirect()->back()->withInput();
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $new = new Fixture();
        $new->round = $request->round;
        $new->group = $request->group;
        $new->teama = $request->teama;
        $new->teamb = $request->teamb;
        $new->date = $request->date;
        $new->cet = $request->cet;
        $new->save();

        if($new->id) {
            return redirect()->route("fixtures");
        } else {
            return redirect()->back()->withInput();
        }

    }
    public function fixturedelete(Request $request) {

        $deleted = Fixture::find($request->id)->delete();
        return $deleted;

    }

    public function question() {

        $questions = Question::all()->groupBy('round');

        $roundwithoutquestions = [];
     
        $rounds = Round::all();

        for($x = 0 ; $x < count($rounds) ; $x++) {

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
        return view('admin.question.list', compact('questions', 'roundwithoutquestions'));

    }
    public function questionedit($id) {
        
        $question = Question::find($id);
        return view('admin.question.edit', compact('question', 'id'));
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
        return view('admin.question.answers', compact('question', 'id'));
    }
    public function questionroundedit($id) {
        
        $questions = Question::where('round', '=', $id)->get();
        return view('admin.question.roundedit', compact('questions', 'id'));
    }
    public function questiondelete(Request $request) {

        $deleted = Question::find($request->id)->delete();
        return $deleted;

    }
    public function questionnew($id) {
        return view('admin.question.new', compact('id'));
    }
    public function questionadd(Request $request) {

        $questions = Question::where('round', '=', $request->round)->get();

        if(count($questions) >= 5) {
            return redirect()->back()->withInput();
        }

        $validator = Validator::make($request->all(),
        [
            'number' => 'required|string',
            'text' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $new = new Question();
        $new->round = $request->round;
        $new->number = $request->number;
        $new->text = $request->text;
        $new->save();

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
        return view('admin.qinput.edit', compact('qinput', 'id'));

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
        return view('admin.qinput.new', compact('id'));
    }
    public function qinputadd(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'qid' => 'required|string',
            'input' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $new = new QInput();
        $new->qid = $request->qid;
        $new->input = $request->input;
        $new->save();

        if($new->id) {
            return redirect()->route("questions.answers", $request->qid);
        } else {
            return redirect()->back()->withInput();
        }

    }

    public function uploadplayer(Request $request) {

        $path = $request->file('file')->getRealPath();

        $customerArr = $this->csvToArray($path);

        try {
            for ($i = 0; $i < count($customerArr); $i ++)
            {
                $array = [];
                $keys = [];
    
                foreach($customerArr[$i] as $key => $value) {
                    $array[strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $key))] = $value;
                    array_push($keys, strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $key)));
                }
                
    
                if($keys != ['round', 'team', 'position', 'no', 'name', 'club', 'value']) {
                    return redirect()->back()->withInput();
                }
    
                if(!Player::where(['name' =>  $array['name'], 'position' =>  $array['position'], 'value' =>  $array['value']])->first()) {

                    $new = new Player();
    
                    foreach($customerArr[$i] as $key => $value) {
                        
                        if(str_contains($key, 'Round')) {
                            $round = Round::where('roundno', '=', number_format($value))->first();
                            if(!!$round) {
                                $new[strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $key))] = $round->id;
                            } else {
                                continue 2;
                            }
                        } else {
                            // if($key === 'Team') {
                            //     $team = RealTeam::where('name', '=', trim($value))->first();
                            //     if(!!$team) {
                            //         $new[strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $key))] = $team->id;
                            //     } else {
                            //         continue 2;
                            //     }
                            // } else {
                            //     $new[strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $key))] = $value;
                            // }
                            $new[strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $key))] = $value;

                        }
                    }
                    $new->saveOrFail();
                }
                
            }
        } catch(Exception $e) {
            return redirect()->back()->withInput();
        }
     
        return redirect()->route('players');
    }

    public function csvToArray($filename = '', $delimiter = ',') {

        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        try {

            if (($handle = fopen($filename, 'r')) !== false)
            {
                while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
                {
                    if (!$header)
                        $header = $row;
                    else
                        $data[] = array_combine($header, $row);
                }
                fclose($handle);
            }

        } catch(Exception $e) {

            return redirect()->route('players.new');
        }
        
        return $data;
    }
}
