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
    <div class="container">
        <div class="row text-center">
            <!-- Contact Form -->
            <div class="col-sm-10 col-sm-offset-1 col-xs-12 mb-30">
                <div class="submit-form">
                    <form id="submit-form" action="{{route('players.pointupdate')}}" method="post">
                        @csrf
                        <h4>Edit Player Point</h4>
                        <input class="hidden" name="id" value={{$id}} />
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Playing</p>
                                    <input type="number" name="playing" @if(isset($point)) value="{{$point["playing"]}}" @else value="{{old('playing')}}" @endif />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">60min</p>
                                    <input type="number" name="60min" @if(isset($point)) value="{{$point["60min"]}}" @else value="{{old('60min')}}" @endif />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Goal</p>
                                    <input type="number" name="goal" @if(isset($point)) value="{{$point["goal"]}}" @else value="{{old('goal')}}" @endif />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Assist</p>
                                    <input type="number" name="assist" @if(isset($point)) value="{{$point["assist"]}}" @else value="{{old('assist')}}" @endif />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Decisive Goal</p>
                                    <input type="number" name="decisivegoal" @if(isset($point)) value="{{$point["decisivegoal"]}}" @else value="{{old('decisivegoal')}}" @endif />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Own Goal</p>
                                    <input type="number" name="owngoal" @if(isset($point)) value="{{$point["owngoal"]}}" @else value="{{old('owngoal')}}" @endif />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">SOT</p>
                                    <input type="number" name="sot" @if(isset($point)) value="{{$point["sot"]}}" @else value="{{old('sot')}}" @endif />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Penalty Won</p>
                                    <input type="number" name="penaltywon" @if(isset($point)) value="{{$point["penaltywon"]}}" @else value="{{old('penaltywon')}}" @endif />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Penalty Committed</p>
                                    <input type="number" name="penaltycommitted" @if(isset($point)) value="{{$point["penaltycommitted"]}}" @else value="{{old('penaltycommitted')}}" @endif />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Penalty Saved</p>
                                    <input type="number" name="penaltysaved" @if(isset($point)) value="{{$point["penaltysaved"]}}" @else value="{{old('penaltysaved')}}" @endif />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Penalty Missed</p>
                                    <input type="number" name="penaltymissed" @if(isset($point)) value="{{$point["penaltymissed"]}}" @else value="{{old('penaltymissed')}}" @endif />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Big Chance Missed</p>
                                    <input type="number" name="bigchancemissed" @if(isset($point)) value="{{$point["bigchancemissed"]}}" @else value="{{old('bigchancemissed')}}" @endif />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Blocked Shots</p>
                                    <input type="number" name="blockedshots" @if(isset($point)) value="{{$point["blockedshots"]}}" @else value="{{old('blockedshots')}}" @endif />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Saves</p>
                                    <input type="number" name="saves" @if(isset($point)) value="{{$point["saves"]}}" @else value="{{old('saves')}}" @endif />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Goal Against</p>
                                    <input type="number" name="goalagainst" @if(isset($point)) value="{{$point["goalagainst"]}}" @else value="{{old('goalagainst')}}" @endif />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Yellow</p>
                                    <input type="number" name="yellow" @if(isset($point)) value="{{$point["yellow"]}}" @else value="{{old('yellow')}}" @endif />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Direct Red</p>
                                    <input type="number" name="directred" @if(isset($point)) value="{{$point["directred"]}}" @else value="{{old('directred')}}" @endif />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">MoM</p>
                                    <input type="number" name="mom" @if(isset($point)) value="{{$point["mom"]}}" @else value="{{old('mom')}}" @endif />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Point Total</p>
                                    <input type="number" name="pointtot" @if(isset($point)) value="{{$point["pointtot"]}}" @else value="{{old('pointtot')}}" @endif />
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

@endsection
