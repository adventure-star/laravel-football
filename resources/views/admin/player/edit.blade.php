@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>Edit Player</h2>
            </div>
        </div>
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
                    <form id="submit-form" action="{{route('players.update')}}" method="post">
                        @csrf
                        <h4>Edit Player</h4>
                        <input class="hidden" name="id" value={{$id}} />
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Name</p>
                                    <input type="text" name="name" @if(isset($player)) value="{{$player["name"]}}"@endif />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Team</p>
                                    <input type="text" name="team" @if(isset($player)) value="{{$player["team"]}}"@endif />
                                    {{-- <select name="team" required>
                                        <option disabled selected>Select Team!</option>
                                        @if(isset($teams) && count($teams) > 0)
                                            @foreach($teams as $key=>$item)
                                                <option value={{$item['id']}} @if($player["team"] == $item['id'])selected @endif>{{$item['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Round</p>
                                    <select name="round" required>
                                        <option disabled selected>Select Round!</option>
                                        @if(isset($rounds) && count($rounds) > 0)
                                            @foreach($rounds as $key=>$item)
                                                <option value={{$item['id']}} @if($player["round"] == $item['id'])selected @endif>{{$item['roundno']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Position</p>
                                    <input type="text" name="position" @if(isset($player)) value="{{$player["position"]}}"@endif />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Value</p>
                                    <input type="text" name="value" @if(isset($player)) value="{{$player["value"]}}"@endif />
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

@include('layouts.breakingnews')

@endsection
