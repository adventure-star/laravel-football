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
                    <form id="submit-form" action="{{route('fixtures.update')}}" method="post">
                        @csrf
                        <h4>Edit Fixture</h4>
                        <input class="hidden" name="id" value={{$id}} />
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Round</p>
                                    <select name="round" required>
                                        <option disabled selected>Select Round!</option>
                                        @if(isset($rounds) && count($rounds) > 0)
                                            @foreach($rounds as $key=>$item)
                                                <option value={{$item['id']}} @if($fixture["round"] == $item['id'])selected @endif>{{$item['roundno']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Group</p>
                                    <input type="text" name="group" @if(isset($fixture)) value="{{$fixture["group"]}}"@endif />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Team A</p>
                                    <select name="teama" required>
                                        <option disabled selected>Select Team</option>
                                        @if(isset($teams) && count($teams) > 0)
                                            @foreach($teams as $key=>$item)
                                                <option value={{$item['id']}} @if($fixture["teama"] == $item['id']) selected @endif>{{$item['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Team B</p>
                                    <select name="teamb" required>
                                        <option disabled selected>Select Team</option>
                                        @if(isset($teams) && count($teams) > 0)
                                            @foreach($teams as $key=>$item)
                                                <option value={{$item['id']}} @if($fixture["teamb"] == $item['id']) selected @endif>{{$item['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Date</p>
                                    <input type="text" name="date" @if(isset($fixture)) value="{{$fixture["date"]}}"@endif />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">CET</p>
                                    <input type="text" name="cet" @if(isset($fixture)) value="{{$fixture["cet"]}}"@endif />
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
