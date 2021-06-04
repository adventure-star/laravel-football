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
            <div class="col-md-7 col-sm-12">
                <div class="row">
      <!-- Contact Form -->
                    <div class="col-sm-10 col-sm-offset-1 col-xs-12 mb-30">
                        <div class="submit-form">
                            <form id="submit-form" action="{{route('submitsave')}}" method="post">
                                @csrf
                                <div class="row">
                                    <h4>Round</h4>
                                    <div class="w-100 maxwidth-400 mx-auto px-14">
                                        <select name="round" onchange="onRoundChanged(this)" required>
                                            <option disabled selected>Select Round</option>
                                            @if(isset($rounds) && count($rounds) > 0)
                                                @foreach($rounds as $item)
                                                    <option value={{$item['id']}}>Round {{$item['roundno']}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <h4>Team</h4>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-xs-12">
                                        <div class="w-100 maxwidth-200 mx-auto">
                                            <p class="player-label">Goalkeeper</p>
                                            <select id="goalkeeper" name="g" required>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="w-100 maxwidth-200 mx-auto">
                                            <p class="player-label">Defender 1</p>
                                            <select id="defender1" name="d1" required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="maxwidth-200 mx-auto">
                                            <p class="player-label">Defender 2</p>
                                            <select id="defender2" name="d2" required>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="w-100 maxwidth-200 m-left">
                                            <p class="player-label">Midfielder 1</p>
                                            <select id="midfielder1" name="m1" required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="w-100 maxwidth-200 m-right">
                                            <p class="player-label">Midfielder 2</p>
                                            <select id="midfielder2" name="m2" required>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="w-100 maxwidth-200 mx-auto">
                                            <p class="player-label">Forward 1</p>
                                            <select id="forward1" name="f1" required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="w-100 maxwidth-200 mx-auto">
                                            <p class="player-label">Forward 2</p>
                                            <select id="forward2" name="f2" required>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <h4>Question</h4>
                                <div id="questionarea"></div>
                                @if(Auth::user())
                                    <input type="submit" value="Submit">
                                @else
                                    <h5>You have to Login to submit team</h5>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                {{-- <!-- Fixtures Area Start -->
                <div id="fixtures-area" class="fixtures-area section pb-120">
                    <div class="container"> --}}
                        <div class="row">
                            
                            <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                                <!-- Fixtures Table -->
                                <h4>Fixtures</h4>
                                <div class="table-responsive fixtures-table maxwidth-700 mx-auto mt-25">
                                    <table id="fixturetable" class="table">
                                    </table>
                                </div>
                            </div>
                        </div>
                    {{-- </div>
                </div> --}}
                <!-- Fixtures Area End -->
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

@endsection

@section('scripts')

<script>
    function onRoundChanged(component) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '<?= csrf_token() ?>'
            }
        });

        $.ajax({
            url: "{{route('submitdata')}}",
            headers: { 'csrftoken' : '{{ csrf_token() }}' },
            data: JSON.stringify({round: component.value}) ,
            type: 'POST',
            datatype: 'JSON',
            contentType: 'application/json',
            success: function (response) {

                var index;
                var content1 = "";
                for ( index = 0 ; index < response["g"].length ; index ++ ) {

                    if(!!response["old"] && response["old"][0]["g"] == response["g"][index].id) {
                        content1 += "<option selected value='";
                    } else {
                        content1 += "<option value='";
                    }

                    content1 += response["g"][index].id;
                    content1 += "'>";
                    content1 += response["g"][index].name + "(" + response["g"][index].team + ", " + response["g"][index].value + ")";
                    content1 += "</option>";

                }

                var content2 = "";
                for ( index = 0 ; index < response["d1"].length ; index ++ ) {

                    if(!!response["old"] && response["old"][0]["d1"] == response["d1"][index].id) {
                        content2 += "<option selected value='";
                    } else {
                        content2 += "<option value='";
                    }

                    content2 += response["d1"][index].id;
                    content2 += "'>";
                    content2 += response["d1"][index].name + "(" + response["d1"][index].team + ", " + response["d1"][index].value + ")";
                    content2 += "</option>";

                }

                var content3 = "";
                for ( index = 0 ; index < response["d2"].length ; index ++ ) {

                    if(!!response["old"] && response["old"][0]["d2"] == response["d2"][index].id) {
                        content3 += "<option selected value='";
                    } else {
                        content3 += "<option value='";
                    }

                    content3 += response["d2"][index].id;
                    content3 += "'>";
                    content3 += response["d2"][index].name + "(" + response["d2"][index].team + ", " + response["d2"][index].value + ")";
                    content3 += "</option>";

                }
                var content4 = "";
                for ( index = 0 ; index < response["m1"].length ; index ++ ) {

                    if(!!response["old"] && response["old"][0]["m1"] == response["m1"][index].id) {
                        content4 += "<option selected value='";
                    } else {
                        content4 += "<option value='";
                    }

                    content4 += response["m1"][index].id;
                    content4 += "'>";
                    content4 += response["m1"][index].name + "(" + response["m1"][index].team + ", " + response["m1"][index].value + ")";
                    content4 += "</option>";

                }

                var content5 = "";
                for ( index = 0 ; index < response["m2"].length ; index ++ ) {

                    if(!!response["old"] && response["old"][0]["m2"] == response["m2"][index].id) {
                        content5 += "<option selected value='";
                    } else {
                        content5 += "<option value='";
                    }

                    content5 += response["m2"][index].id;
                    content5 += "'>";
                    content5 += response["m2"][index].name + "(" + response["m2"][index].team + ", " + response["m2"][index].value + ")";
                    content5 += "</option>";

                }

                var content6 = "";
                for ( index = 0 ; index < response["f1"].length ; index ++ ) {

                    if(!!response["old"] && response["old"][0]["f1"] == response["f1"][index].id) {
                        content6 += "<option selected value='";
                    } else {
                        content6 += "<option value='";
                    }

                    content6 += response["f1"][index].id;
                    content6 += "'>";
                    content6 += response["f1"][index].name + "(" + response["f1"][index].team + ", " + response["f1"][index].value + ")";
                    content6 += "</option>";

                }

                var content7 = "";
                for ( index = 0 ; index < response["f2"].length ; index ++ ) {

                    if(!!response["old"] && response["old"][0]["f2"] == response["f2"][index].id) {
                        content7 += "<option selected value='";
                    } else {
                        content7 += "<option value='";
                    }

                    content7 += response["f2"][index].id;
                    content7 += "'>";
                    content7 += response["f2"][index].name + "(" + response["f2"][index].team + ", " + response["f2"][index].value + ")";
                    content7 += "</option>";

                }

                var content8 = "";
                for ( index = 0 ; index < response["questions"].length ; index ++ ) {

                    content8 += "<div class='row'>";
                    content8 += "<div class='col-sm-6 col-xs-12 text-right-left pb-0-20 pl-0-vw'>";
                    content8 += "<p class='player-label mt-10 mb-0-10'>";
                    content8 += response["questions"][index].number + ") " + response["questions"][index].text;
                    content8 += "</p></div>";
                    content8 += "<div class='col-sm-6 col-xs-12'>";
                    content8 += "<div class='w-100 maxwidth-250 mx-auto'>"
                    content8 += "<select name='question_";
                    content8 += response["questions"][index].id;
                    content8 += "'>";

                    content8 += "<option disabled selected>Please Select!</option>"

                    var jindex;

                    for( jindex = 0 ; jindex < response["questions"][index].qinputs.length ; jindex ++) {

                        if(getOldAnswer(response["oldanswers"], response["questions"][index].qinputs[jindex].id)) {
                            content8 += "<option selected value='";
                        } else {
                            content8 += "<option value='";
                        }

                        content8 += response["questions"][index].qinputs[jindex].id;
                        content8 += "'>";
                        content8 += response["questions"][index].qinputs[jindex].input;
                        content8 += "</option>";
                    }

                    content8 += "</select></div></div></div>";

                }

                var content9 = "";
                content9 += "<tr><th>match</th><th>date</th><th>time</th><th>group</th></tr>";

                for ( index = 0 ; index < response["fixtures"].length ; index ++ ) {

                    content9 += "<tr>";
                    content9 += "<td>";
                    content9 += getTeamName(response['teams'], response["fixtures"][index].teama) + "-" + getTeamName(response['teams'], response["fixtures"][index].teamb);
                    content9 += "</td>";
                    content9 += "<td>";
                    content9 += response["fixtures"][index].date;
                    content9 += "</td>";
                    content9 += "<td>";
                    content9 += response["fixtures"][index].cet;
                    content9 += "</td>";
                    content9 += "<td>";
                    content9 += response["fixtures"][index].group;
                    content9 += "</td>";

                }

                var preoption;

                preoption = "<option disabled selected>Select GoalKeeper</option>";
                $("#goalkeeper").html(preoption + content1);
                preoption = "<option disabled selected>Select Defender1</option>";
                $("#defender1").html(preoption + content2);
                preoption = "<option disabled selected>Select Defender2</option>";
                $("#defender2").html(preoption + content3);
                preoption = "<option disabled selected>Select Midfielder1</option>";
                $("#midfielder1").html(preoption + content4);
                preoption = "<option disabled selected>Select Midfielder2</option>";
                $("#midfielder2").html(preoption + content5);
                preoption = "<option disabled selected>Select Forward1</option>";
                $("#forward1").html(preoption + content6);
                preoption = "<option disabled selected>Select Forward2</option>";
                $("#forward2").html(preoption + content7);
                // $("#questionarea").html(content8 !== "" ? content8 : "<select name='q1' class='hidden' required></select>");
                $("#questionarea").html(content8);
                $("#fixturetable").html(content9);

            },
            error: function (response) {
                $('#errormessage').html(response.message);
            }
        });
    }

    function getTeamName(teams, id) {

        let i;
        for(i = 0 ; i < teams.length ; i ++) {
            if(teams[i].id === id) {
                return teams[i].name;
            }
        }
        
    }

    function getOldAnswer(answers, id) {
        if(answers) {
            let i;
            for(i = 0 ; i < answers.length ; i ++) {
                if(answers[i].qinput === id) {
                    return true;
                }
            }
        }
      
        return false;
    }

</script>
    
@endsection