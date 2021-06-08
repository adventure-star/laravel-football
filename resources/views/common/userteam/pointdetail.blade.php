@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Contact Area Start -->
<div id="contact-area" class="contact-area section pb-90 pt-120">
    <div class="container-fluid">
            <div class="row text-center">
                <h4>Player Points</h4>
                @if(isset($detail))
                    @foreach($detail as $key => $item)
                        @if(!!$item)
                            <div class="col-md-6 col-sm-12 mt-10">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12 mb-20">
                                        {{App\Model\Player::find($item["playerid"])->team}} No {{App\Model\Player::find($item["playerid"])->no}} ({{App\Model\Player::find($item["playerid"])->name}})
                                    </div>
                                    @if($item["playing"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Playing : {{$item["playing"]}}
                                        </div>
                                    @endif
                                    @if($item["60min"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            60 min : {{$item["60min"]}}
                                        </div>
                                    @endif
                                    @if($item["goal"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Goal : {{$item["goal"]}}
                                        </div>
                                    @endif
                                    @if($item["assist"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Assist : {{$item["assist"]}}
                                        </div>
                                    @endif
                                    @if($item["decisivegoal"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Decisive Goal : {{$item["decisivegoal"]}}
                                        </div>
                                    @endif
                                    @if($item["owngoal"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Own Goal : {{$item["owngoal"]}}
                                        </div>
                                    @endif
                                    @if($item["sot"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            SOT : {{$item["sot"]}}
                                        </div>
                                    @endif
                                    @if($item["penaltywon"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Penalty Won : {{$item["penaltywon"]}}
                                        </div>
                                    @endif
                                    @if($item["penaltycommitted"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Penalty Committed : {{$item["penaltycommitted"]}}
                                        </div>
                                    @endif
                                    @if($item["penaltysaved"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Penalty Saved : {{$item["penaltysaved"]}}
                                        </div>
                                    @endif
                                    @if($item["penaltymissed"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Penalty Missed : {{$item["penaltymissed"]}}
                                        </div>
                                    @endif
                                    @if($item["penaltysaved"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Big Chance Missed : {{$item["bigchancemissed"]}}
                                        </div>
                                    @endif
                                    @if($item["penaltysaved"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Blocked Shots : {{$item["blockedshots"]}}
                                        </div>
                                    @endif
                                    @if($item["saves"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Saves : {{$item["saves"]}}
                                        </div>
                                    @endif
                                    @if($item["goalagainst"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Goal Against : {{$item["goalagainst"]}}
                                        </div>
                                    @endif
                                    @if($item["yellow"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Yellow : {{$item["yellow"]}}
                                        </div>
                                    @endif
                                    @if($item["directred"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            Direct Red : {{$item["directred"]}}
                                        </div>
                                    @endif
                                    @if($item["mom"] != 0)
                                        <div class="col-sm-12 col-xs-12 mb-5">
                                            MoM : {{$item["mom"]}}
                                        </div>
                                    @endif
                                    <div class="col-sm-12 col-xs-12 mb-30 text-bold">
                                        Total : {{$item["pointtot"]}} Points
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
            <div class="row text-center">
                <h4>Question Points</h4>
                @if(isset($answers))
                    @foreach($answers as $key => $answer)
                        <div class="col-md-6 col-sm-12 mt-20 mb-10">
                            @if(!!$answer)
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12 mb-10">
                                        Question: {{App\Model\Question::find(App\Model\QInput::find($answer["qinput"])->qid)->text }}
                                    </div>
                                    <div class="col-sm-12 col-xs-12 mb-10 text-bold">
                                        {{App\Model\QInput::find($answer["qinput"])->input}} : {{App\Model\QInput::find($answer["qinput"])->point}}
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>
        {{-- </div> --}}
    </div>
</div>
<!-- Contact Area End -->

@endsection
