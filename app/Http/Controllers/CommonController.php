<?php

namespace App\Http\Controllers;

use App\Model\Fixture;
use App\Model\Joined;
use App\Model\Player;
use App\Model\QInput;
use App\Model\Question;
use App\Model\Round;
use App\Model\Team;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommonController extends Controller
{
    public function index() {
        return view('index');
    }
    public function about() {
        return view('origin.about');
    }
    public function blog() {
        return view('origin.blog');
    }
    public function blogdetails() {
        return view('origin.blog-details');
    }
    public function cart() {
        return view('origin.cart');
    }
    public function checkout() {
        return view('origin.checkout');
    }
    public function contact() {
        return view('origin.contact');
    }

    public function pointtable() {
        return view('origin.point-table');
    }
    public function productdetails() {
        return view('origin.product-details');
    }
    public function shop() {
        return view('origin.shop');
    }
    public function team() {
        return view('origin.team');
    }
    public function wishlist() {
        return view('origin.wishlist');
    }

    public function submit() {

        $rounds = Round::where("ended", "=", 1)->get();

        return view('submit', compact('rounds'));

    }

    public function submitdata(Request $request)
    {

        $goalkeepers = Player::where("position", "=", "G")->where("round", "=", $request->round)->get();
        $defender1 = Player::where("position", "=", "D1")->where("round", "=", $request->round)->get();
        $defender2 = Player::where("position", "=", "D2")->where("round", "=", $request->round)->get();
        $midfielder1 = Player::where("position", "=", "M1")->where("round", "=", $request->round)->get();
        $midfielder2 = Player::where("position", "=", "M2")->where("round", "=", $request->round)->get();
        $forward1 = Player::where("position", "=", "F1")->where("round", "=", $request->round)->get();
        $forward2 = Player::where("position", "=", "F2")->where("round", "=", $request->round)->get();

        $questions = Question::where("round", "=", $request->round)->get();

        foreach($questions as $question) {
            $question["qinputs"] = QInput::where("qid", "=", $question['id'])->get();
        }

        $fixtures = Fixture::where("round", "=", $request->round)->get();

        $data = array(
            'goalkeepers'=>$goalkeepers, 
            'defender1'=>$defender1, 
            'defender2'=>$defender2, 
            'midfielder1'=>$midfielder1, 
            'midfielder2'=>$midfielder2, 
            'forward1'=>$forward1, 
            'forward2'=>$forward2, 
            'questions'=>$questions, 
            'fixtures'=>$fixtures
        );

        return response()->json($data, 200);

    }
    public function submitsave(Request $request) {

        $record = Team::where("jid", "=", Auth::user()->id)->where("round", "=", $request->round)->first();

        if($record) {
            $data = ([
                'g' => $request->g,
                'd1' => $request->d1,
                'd2' => $request->d2,
                'm1' => $request->m1,
                'm2' => $request->m2,
                'f1' => $request->f1,
                'f2' => $request->f2,
                'q1' => $request->q1,
                'q2' => $request->q2,
                'q3' => $request->q3,
                'q4' => $request->q4,
                'q5' => $request->q5
            ]);

            Team::where('id', $record->id)->update($data);

        } else {
            $new = new Team();
            $new->jid = Auth::user()->id;
            $new->round = $request->round;
            $new->g = $request->g;
            $new->d1 = $request->d1;
            $new->d2 = $request->d2;
            $new->m1 = $request->m1;
            $new->m2 = $request->m2;
            $new->f1 = $request->f1;
            $new->f2 = $request->f2;
            $new->q1 = $request->q1;
            $new->q2 = $request->q2;
            $new->q3 = $request->q3;
            $new->q4 = $request->q4;
            $new->q5 = $request->q5;
            $new->save();
        }

        return redirect()->route('index');

    }


}
