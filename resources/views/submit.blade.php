@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>submit</h2>
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
                    <form id="submit-form" action="mail.php" method="post">
                        <h4>Team</h4>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Goalkeeper</p>
                                    <select>
                                        @if(isset($goalkeepers) && count($goalkeepers) > 0)
                                            @foreach($goalkeepers as $item)
                                                <option>{{$item['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Defender 1</p>
                                    <select>
                                        @if(isset($defender1) && count($defender1) > 0)
                                            @foreach($defender1 as $item)
                                                <option>{{$item['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="maxwidth-200 mx-auto">
                                    <p class="player-label">Defender 2</p>
                                    <select>
                                        @if(isset($defender2) && count($defender2) > 0)
                                            @foreach($defender2 as $item)
                                                <option>{{$item['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="w-100 maxwidth-200 m-left">
                                    <p class="player-label">Midfielder 1</p>
                                    <select>
                                        @if(isset($midfielder1) && count($midfielder1) > 0)
                                            @foreach($midfielder1 as $item)
                                                <option>{{$item['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="w-100 maxwidth-200 m-right">
                                    <p class="player-label">Midfielder 2</p>
                                    <select>
                                        @if(isset($midfielder2) && count($midfielder2) > 0)
                                            @foreach($midfielder2 as $item)
                                                <option>{{$item['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Forward 1</p>
                                    <select>
                                        @if(isset($forward1) && count($forward1) > 0)
                                            @foreach($forward1 as $item)
                                                <option>{{$item['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Forward 2</p>
                                    <select>
                                        @if(isset($forward2) && count($forward2) > 0)
                                            @foreach($forward2 as $item)
                                                <option>{{$item['name']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h4>Question</h4>
                        @if(isset($questions) && count($questions) > 0)
                            @foreach($questions as $item)
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12 text-right">
                                    <p class="player-label mt-10">{{$item['number']}}) {{$item['text']}}</p>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 maxwidth-250">
                                        <select>
                                            @if(isset($item->qinputs) && count($item->qinputs) > 0)
                                                @foreach($item->qinputs as $k => $el)
                                                    <option>{{$el['input']}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            @endforeach
                        @endif
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

@section('scripts')

<script src="{{asset('js/password-switch.js')}}"></script>
    
@endsection