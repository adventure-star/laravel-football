<?php

namespace App\Http\Controllers;

use App\Model\Answer;
use App\Model\Fixture;
use App\Model\Player;
use App\Model\Point;
use App\Model\QInput;
use App\Model\Question;
use App\Model\RealTeam;
use App\Model\Result;
use App\Model\Round;
use App\Model\Team;
use App\User;
use Exception;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'roundno' => 'required|string',
            'ended' => 'required|string',
        ]);

        $round = Round::where(['roundno' => $request->roundno])->first();

        if(!!$round && $round->id != $request->id) {
            return redirect()->back()->withInput();
        }

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
            'name' => 'required|string',
        ]);

        $data = ([
            'name' => $request->name,
        ]);

        $team = RealTeam::where(['name' => $request->name])->first();

        if(!!$team && $team->id != $request->id) {
            return redirect()->back()->withInput();
        }

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

        $player = Player::where(['name' => $request->name, 'team' => $request->team, 'round' => $request->round])->first();

        if(!!$player && $player->id != $request->id) {
            return redirect()->back()->withInput();
        }

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

    public function userpaidstatechange(Request $request) {

        $user = User::find($request->id);

        $data = ([
            'ispaid' => $user->ispaid == 1 ? 0 : 1
        ]);

        $update = User::where('id', $request->id)->update($data);

        return $update;

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

        $fixture = Fixture::where(['round' => $request->round, 'teama' => $request->teama, 'teamb' => $request->teamb])->first();

        if(!!$fixture && $fixture->id != $request->id) {
            return redirect()->back()->withInput();
        }

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

        $fixture = Fixture::where(['round' => $request->round, 'teama' => $request->teama, 'teamb' => $request->teamb])->first();

        if(!!$fixture) {
            return redirect()->back()->withInput();
        }

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

        $rawquestions = Question::all();

        for($x = 0 ; $x < count($rounds) ; $x++) {

            $state = true;

            for($y = 0 ; $y < count($rawquestions) ; $y++) {
                if($rounds[$x]['id'] == $rawquestions[$y]['round']) {
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
            'number' => 'required|string',
            'text' => 'required|string'
        ]);

        $data = ([
            'number' => $request->number,
            'text' => $request->text
        ]);

        
        $question = Question::where(['number' => $request->number, 'text' => $request->text])->first();

        if(!!$question && $question->id != $request->id) {
            return redirect()->back()->withInput();
        }

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

        $question = Question::where(['round' => $request->round, 'number' => $request->number])->first();

        if(!!$question) {
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
            'input' => 'required|string',
            'point' => 'required|numeric'
        ]);

        $qinput = QInput::where(['qid' => QInput::find($request->id)->qid, 'input' => $request->input])->first();

        if(!!$qinput && $qinput->id != $request->id) {
            return redirect()->back()->withInput();
        }

        $data = ([
            'input' => $request->input,
            'point' => $request->point
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
            'point' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $qinput = QInput::where(['qid' => $request->qid, 'input' => $request->input])->first();

        if(!!$qinput) {
            return redirect()->back()->withInput();
        }

        $new = new QInput();
        $new->qid = $request->qid;
        $new->input = $request->input;
        $new->point = $request->point;
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
    
                if(!Player::where(['round' =>  $array['round'], 'name' =>  $array['name'], 'position' =>  $array['position'], 'value' =>  $array['value']])->first()) {

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

    public function uploadPoint(Request $request) {

        $path = $request->file('file')->getRealPath();

        $pointArr = $this->csvToArray($path);

        try {
            for ($i = 0; $i < count($pointArr); $i ++)
            {
                $array = [];
                $keys = [];
    
                foreach($pointArr[$i] as $key => $value) {
                    $array[strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $key))] = $value;
                    array_push($keys, strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $key)));
                }

                if($keys != ['round', 'team', 'playerno', 'playing', '60min', 'goal', 'assist', 'decisivegoal', 'owngoal', 'sot', 'penaltywon', 'penaltycommitted', 'penaltysaved', 'penaltymissed', 'bigchancemissed', 'blockedshots', 'saves', 'goalagainst', 'yellow', 'directred', 'mom', 'pointtot']) {
                    return redirect()->back()->withInput();
                }

                $player = Player::where(['round' => Round::where('roundno', $array['round'])->first()->id , 'team' => $array['team'], 'no' => $array['playerno']])->first();

                if(!!$player) {

                    $point = Point::where('playerid', $player->id)->first();

                    if($point) {

                        $data = [];

                        foreach($pointArr[$i] as $key => $value) {
                        
                            if(!str_contains($key, 'Round') && !str_contains($key, 'Team') && !str_contains($key, 'Player no')) {
                                $data[strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $key))] = $value;
                            }
                        }

                        Point::where('playerid', $player->id)->update($data);

                    } else {
                        $new = new Point();

                        $new->playerid = $player->id;
    
                        foreach($pointArr[$i] as $key => $value) {
                        
                            if(!str_contains($key, 'Round') && !str_contains($key, 'Team') && !str_contains($key, 'Player no')) {
                                $new[strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $key))] = $value;
                            }
                        }
                        $new->saveOrFail();
                    }
                    
                }
                
            }
        } catch(Exception $e) {
            return redirect()->back()->withInput();
        }
     
        return redirect()->route('players');
    }

    public function points() {
        return view('admin.point.upload');
    }
    public function pointedit($id) {

        $point = Point::where('playerid', $id)->first();

        return view('admin.point.edit', compact('id', 'point'));

    }
    public function pointupdateorsave(Request $request) {

        $validator = Validator::make($request->all(),
        [
            'playing' => 'required|numeric',
            '60min' => 'required|numeric',
            'goal' => 'required|numeric',
            'assist' => 'required|numeric',
            'decisivegoal' => 'required|numeric',
            'owngoal' => 'required|numeric',
            'sot' => 'required|numeric',
            'penaltywon' => 'required|numeric',
            'penaltycommitted' => 'required|numeric',
            'penaltysaved' => 'required|numeric',
            'penaltymissed' => 'required|numeric',
            'bigchancemissed' => 'required|numeric',
            'blockedshots' => 'required|numeric',
            'saves' => 'required|numeric',
            'goalagainst' => 'required|numeric',
            'yellow' => 'required|numeric',
            'directred' => 'required|numeric',
            'mom' => 'required|numeric',
            'pointtot' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $point = Point::where('playerid', $request->id)->first();

        if(!!$point) {

            $data = ([
                'playing' => $request->playing,
                '60min' => $request['60min'],
                'goal' => $request->goal,
                'assist' => $request->assist,
                'decisivegoal' => $request->decisivegoal,
                'owngoal' => $request->owngoal,
                'sot' => $request->sot,
                'penaltywon' => $request->penaltywon,
                'penaltycommitted' => $request->penaltycommitted,
                'penaltysaved' => $request->penaltysaved,
                'penaltymissed' => $request->penaltymissed,
                'bigchancemissed' => $request->bigchancemissed,
                'blockedshots' => $request->blockedshots,
                'saves' => $request->saves,
                'goalagainst' => $request->goalagainst,
                'yellow' => $request->yellow,
                'directred' => $request->directred,
                'mom' => $request->mom,
                'pointtot' => $request->pointtot
            ]);

            $updated = Point::where('playerid', $request->id)->update($data);


        } else {

            $new = new Point();

            $new->playerid = $request->id;

            $new->playing = $request->playing;
            $new['60min'] = $request['60min'];
            $new->goal = $request->goal;
            $new->assist = $request->assist;
            $new->decisivegoal = $request->decisivegoal;
            $new->owngoal = $request->owngoal;
            $new->sot = $request->sot;
            $new->penaltywon = $request->penaltywon;
            $new->penaltycommitted = $request->penaltycommitted;
            $new->penaltysaved = $request->penaltysaved;
            $new->penaltymissed = $request->penaltymissed;
            $new->bigchancemissed = $request->bigchancemissed;
            $new->blockedshots = $request->blockedshots;
            $new->saves = $request->saves;
            $new->goalagainst = $request->goalagainst;
            $new->yellow = $request->yellow;
            $new->directred = $request->directred;
            $new->mom = $request->mom;
            $new->pointtot = $request->pointtot;

            $new->save();
        }

        return redirect()->route('players');

    }

    public function pointcalculate() {

        $rounds = Round::where('ended', 2)->get();

        try {

            for($index = 0 ; $index < count($rounds) ; $index ++) {
    
                $teams = Team::where('round', $rounds[$index]->id)->get();

                foreach($teams as $key => $team) {

                    $point = 0;
    
                    $point += Point::where('playerid', Player::find($team['g'])->id)->first() ? Point::where('playerid', Player::find($team['g'])->id)->first()->pointtot : 0; 
                    $point += Point::where('playerid', Player::find($team['d1'])->id)->first() ? Point::where('playerid', Player::find($team['d1'])->id)->first()->pointtot : 0; 
                    $point += Point::where('playerid', Player::find($team['d2'])->id)->first() ? Point::where('playerid', Player::find($team['d2'])->id)->first()->pointtot : 0; 
                    $point += Point::where('playerid', Player::find($team['m1'])->id)->first() ? Point::where('playerid', Player::find($team['m1'])->id)->first()->pointtot : 0; 
                    $point += Point::where('playerid', Player::find($team['m2'])->id)->first() ? Point::where('playerid', Player::find($team['m2'])->id)->first()->pointtot : 0; 
                    $point += Point::where('playerid', Player::find($team['f1'])->id)->first() ? Point::where('playerid', Player::find($team['f1'])->id)->first()->pointtot : 0; 
                    $point += Point::where('playerid', Player::find($team['f2'])->id)->first() ? Point::where('playerid', Player::find($team['f2'])->id)->first()->pointtot : 0;

                    $answers = Answer::where(['jid' => $team['jid'], 'round' => $team['round']])->get();

                    foreach($answers as $key => $answer) {

                        $qinput = QInput::find($answer['qinput']);

                        if(!!$qinput) {
                            $point += $qinput->point;
                        }

                    }
        
                    $result = Result::where(['round' => $rounds[$index]->id, 'team' => $team->id])->first();
        
                    if($result) {
        
                        $data = [
                            'point' => $point
                        ];
        
                        $updated = Result::where('id', $result->id)->update($data);
        
                    } else {
        
                        $new = new Result();
        
                        $new->round = $rounds[$index]->id;
                        $new->team = $team->id;
                        $new->point = $point;
            
                        $new->save();
                        
                    }
                }
              
            }

            return 1;

        } catch (Exception $e) {
            return 0;
        }

    }
}
