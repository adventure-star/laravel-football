@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>New Player</h2>
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
                    <form id="submit-form" action="{{route('players.new.save')}}" method="post">
                        @csrf
                        <h4>New Player</h4>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Name</p>
                                    <input type="text" name="name" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Team</p>
                                    <input type="text" name="team" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Round</p>
                                    <input type="text" name="round" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Position</p>
                                    <input type="text" name="position" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Value</p>
                                    <input type="text" name="value" required />
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
