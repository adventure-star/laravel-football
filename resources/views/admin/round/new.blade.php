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
                    <form id="submit-form" action="{{route('rounds.new.save')}}" method="post">
                        @csrf
                        <h4>New Round</h4>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">RoundNo</p>
                                    <input type="text" name="roundno" value="{{old('roundno')}}" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">State</p>
                                    <select name="ended" required>
                                        <option disabled selected>Select Status</option>
                                        <option value="0" @if(old('ended') == 0) selected @endif>Not Opened</option>
                                        <option value="1" @if(old('ended') == 1) selected @endif>Active</option>
                                        <option value="2" @if(old('ended') == 2) selected @endif>Expired</option>
                                    </select>
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
