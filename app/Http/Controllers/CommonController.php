<?php

namespace App\Http\Controllers;

use App\Model\Fixture;
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
        return view('about');
    }
    public function blog() {
        return view('blog');
    }
    public function blogdetails() {
        return view('blog-details');
    }
    public function cart() {
        return view('cart');
    }
    public function checkout() {
        return view('checkout');
    }
    public function contact() {
        return view('contact');
    }
    public function fixture() {

        $fixtures = Fixture::all();
        return view('fixture', compact('fixtures'));

    }
    public function pointtable() {
        return view('point-table');
    }
    public function productdetails() {
        return view('product-details');
    }
    public function shop() {
        return view('shop');
    }
    public function team() {
        return view('team');
    }
    public function wishlist() {
        return view('wishlist');
    }
    public function join() {
        return view('join');
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
