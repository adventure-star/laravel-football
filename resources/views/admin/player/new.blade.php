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
                    <form id="submit-form" action="{{route('players.new.save')}}" method="post">
                        @csrf
                        <h4>New Player</h4>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Name</p>
                                    <input type="text" name="name" value="{{old('name')}}" required />
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Team</p>
                                    <input type="text" name="team" value="{{old('team')}}" required />
                                    {{-- <select name="team" required>
                                        <option disabled selected>Select Team!</option>
                                        @if(isset($teams) && count($teams) > 0)
                                            @foreach($teams as $key=>$item)
                                                <option value={{$item['id']}}>{{$item['name']}}</option>
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
                                                <option value={{$item['id']}} @if(old('round') == $item['id'])selected @endif>{{$item['roundno']}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Position</p>
                                    <input type="text" name="position" value="{{old('position')}}" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-xs-12">
                                <div class="w-100 maxwidth-200 mx-auto">
                                    <p class="player-label">Value</p>
                                    <input type="text" name="value" value="{{old('value')}}" required />
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Submit">
                    </form>
                    <div class="mt-40">
                        <h4>Import CSV file for Players</h4>
                        <form id="playeruploadform" action="{{route('uploads.player')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="custom-file-upload">
                                <input onchange="upload()" class="hidden" type="file" name="file" />
                                Import
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

@endsection

@section('scripts')
    <script>
        function upload() {
            document.getElementById("playeruploadform").submit();
        }
    </script>
@endsection
