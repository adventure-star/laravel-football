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
                    <form id="submit-form" action="{{route('questions.update')}}" method="post">
                        @csrf
                        <h4>Edit Question</h4>
                        <input id="questionid" class="hidden" name="id" value={{$id}} />
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="w-100">
                                    <p class="player-label">Text</p>
                                    <input type="text" name="text" @if(isset($question)) value="{{$question["text"]}}" @endif />
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

@include('layouts.breakingnews')

@endsection
