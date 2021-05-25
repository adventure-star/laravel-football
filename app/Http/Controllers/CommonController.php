<?php

namespace App\Http\Controllers;

use App\Model\Fixture;
use App\Model\Joined;
use App\Model\Player;
use App\Model\QInput;
use App\Model\Question;
use Illuminate\Http\Request;

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
    public function fixture() {

        $fixtures = Fixture::all();
        return view('fixture', compact('fixtures'));

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

        $goalkeepers = Player::where("position", "=", "G")->get();
        $defender1 = Player::where("position", "=", "D1")->get();
        $defender2 = Player::where("position", "=", "D2")->get();
        $midfielder1 = Player::where("position", "=", "M1")->get();
        $midfielder2 = Player::where("position", "=", "M2")->get();
        $forward1 = Player::where("position", "=", "F1")->get();
        $forward2 = Player::where("position", "=", "F2")->get();

        $questions = Question::all();
        
        return view('submit', compact('goalkeepers', 'defender1', 'defender2', 'midfielder1', 'midfielder2', 'forward1', 'forward2', 'questions'));

    }


}
