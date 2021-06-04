@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Profile Area Start -->
<div id="fixtures-area" class="fixtures-area section pb-120 pt-120">
    <div class="container-fluid">
        <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
            <div class="panel-group" id="payment-accordion">
                <div class="panel panel-default">
                    <h4 class="panel-title bg-white"><a data-toggle="collapse" data-parent="#payment-accordion" href="#payment-1">rules</a></h4>
                    <div id="payment-1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p class="text-left">
                                <br />
                                The game is based on Euro2020, taking place in 11 cities from 11 June to 11 July.<br /><br />
                                The game is divided in 10 rounds:<br />
                                -	Round 1: Group stage Matchday 1 (Groups A, B & C), Deadline 11 June, 21:00 CET.<br />
                                -	Round 2: Group stage Matchday 1 (Groups D, E & F) , Deadline 13 June, 15:00 CET.<br />
                                -	Round 3: Group stage Matchday 2 (Groups A, B & C) , Deadline 16 June, 15:00 CET.<br />
                                -	Round 4: Group stage Matchday 2 (Groups D, E & F) , Deadline 18 June, 15:00 CET.<br />
                                -	Round 5: Group stage Matchday 3 (Groups A, B & C) , Deadline 20 June, 18:00 CET.<br />
                                -	Round 6: Group stage Matchday 3 (Groups D, E & F) , Deadline 22 June, 21:00 CET.<br />
                                -	Round 7: Round of 16, , Deadline 26 June, 18:00 CET.<br />
                                -	Round 8: Quarter-finals, Deadline 2 July, 18:00 CET.<br />
                                -	Round 9: Semi-finals, Deadline 6 July, 21:00 CET.<br />
                                -	Round 10: The Final, Deadline 11 July, 21:00 CET.<br /><br />
                                For each round you pick a Team of 7 Players (1 Keeper, 2 Defenders, 2 Midfielders, 2 Forwards) and make a guess for 3-6 questions concerning this specific round.<br /><br />
                                The Players have no value and you can pick 7 from one country.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <h4 class="panel-title bg-white"><a class="collapsed" data-toggle="collapse" data-parent="#payment-accordion" href="#payment-2">points</a></h4>
                    <div id="payment-2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p class="text-left">
                                <br />
                                <span class="rule-subheader">Team</span><br /><br />
                                <i><strong>Action							(Points)</strong></i><br />
                                For playing:						(1)<br />
                                Keeper for playing 60 min. or more			(Odds*)<br />
                                For playing 60 min. or more other players		(1)<br />
                                For each goal scored by a keeper			(15)<br />
                                For each goal scored by other				(Odds*)<br />
                                For each assist						(3)<br />
                                Decisive goal						(2*)<br />
                                For each own goal					(-3)<br />
                                Shots on target/Hit woodwork				(1)<br />
                                For each Penalty won					(2)<br />
                                For each Penalty committed				(-2)<br />
                                For each Penalty saved					(4)<br />
                                For each Penalty missed					(-4)<br />
                                Big chances missed					(-2)<br />
                                Blocked shots						(1)<br />
                                For every 2 shot saved by a keeper			(1)<br />
                                For every goal conceded by a defender or keeper	(-1)<br />
                                First goal conceded by a keeper				-2<br />
                                1st yellow						(-1)<br />
                                2nd yellow						(-3)<br />
                                Direct red card						(-5)<br />
                                Man of the Match (Awarded by Uefa)			(2)<br /><br />
                                <i><strong>Data will be collected from Sofascore.com</strong></i><br />
                                <strong>*</strong><br />
                                Odds: Points will differ. The points for the chosen player can be seen as the number in brackets at the end when selecting players.<br />
                                Decisive goal: eg. (3-2) decisive score is the third goal for the home team. (1-1) decisive score is the last goal. <br /><br />

                                <span class="rule-subheader">Questions</span><br />
                                Points given will vary, depending on the number of options.<br />
                                Points to be given will be shown at the end of each question.<br />
                                Eg.<br />
                                In which match will be scored most goals (7, 4, 2)?<br />
                                You will get 7 points if you selected the match, where most goals were scored, 4 points for second most and 2 points for 3rd.<br /><br />
                                <i><strong>If more than one correct answer:</strong></i><br />
                                2 matches, identical highest goals scored: Both gets 6 points (7 + 4)/2 round up<br />
                                3 matches: all get 4 points (7 + 4 + 2)/3 round up<br />
                                4 matches: all get 4 points (7 + 4 + 2)/4 round up (You cannot get less than the next score)<br />
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Area End -->

@endsection