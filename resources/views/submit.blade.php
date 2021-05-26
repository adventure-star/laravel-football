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
                    <form id="submit-form" action="{{route('submitsave')}}" method="post">
                        @csrf
                        <div class="row">
                            <h4>Round</h4>
                            <div class="w-100 maxwidth-400 mx-auto">
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
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

<!-- Fixtures Area Start -->
<div id="fixtures-area" class="fixtures-area section pb-120">
    <div class="container">
        <div class="row">
            
            <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                <!-- Fixtures Table -->
                <h4>Fixtures</h4>
                <div class="table-responsive fixtures-table">
                    <table id="fixturetable" class="table">
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fixtures Area End -->

@include('layouts.breakingnews')

@endsection

@section('scripts')

<script>
    function onRoundChanged(component) {

        console.log(component.value)

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '<?= csrf_token() ?>'
            }
        });

        $.ajax({
            url: "/submit-data",
            headers: { 'csrftoken' : '{{ csrf_token() }}' },
            data: JSON.stringify({round: component.value}) ,
            type: 'POST',
            datatype: 'JSON',
            contentType: 'application/json',
            success: function (response) {

                console.log(response["questions"]);
                var index;
                var content1 = "";
                for ( index = 0 ; index < response["goalkeepers"].length ; index ++ ) {

                    content1 += "<option";
                    content1 += " value=";
                    content1 += "'";
                    content1 += response["goalkeepers"][index].id;
                    content1 += "'";
                    content1 += ">";
                    content1 += response["goalkeepers"][index].name + "(" + response["goalkeepers"][index].team + ", " + response["goalkeepers"][index].value + ")";
                    content1 += "</option>";

                }

                var content2 = "";
                for ( index = 0 ; index < response["defender1"].length ; index ++ ) {

                    content2 += "<option";
                    content2 += " value=";
                    content2 += "'";
                    content2 += response["defender1"][index].id;
                    content2 += "'";
                    content2 += ">";
                    content2 += response["defender1"][index].name + "(" + response["goalkeepers"][index].team + ", " + response["goalkeepers"][index].value + ")";
                    content2 += "</option>";

                }

                var content3 = "";
                for ( index = 0 ; index < response["defender2"].length ; index ++ ) {

                    content3 += "<option";
                    content3 += " value=";
                    content3 += "'";
                    content3 += response["defender2"][index].id;
                    content3 += "'";
                    content3 += ">";
                    content3 += response["defender2"][index].name + "(" + response["goalkeepers"][index].team + ", " + response["goalkeepers"][index].value + ")";
                    content3 += "</option>";

                }
                var content4 = "";
                for ( index = 0 ; index < response["midfielder1"].length ; index ++ ) {

                    content4 += "<option";
                    content4 += " value=";
                    content4 += "'";
                    content4 += response["midfielder1"][index].id;
                    content4 += "'";
                    content4 += ">";
                    content4 += response["midfielder1"][index].name + "(" + response["goalkeepers"][index].team + ", " + response["goalkeepers"][index].value + ")";
                    content4 += "</option>";

                }

                var content5 = "";
                for ( index = 0 ; index < response["midfielder2"].length ; index ++ ) {

                    content5 += "<option";
                    content5 += " value=";
                    content5 += "'";
                    content5 += response["midfielder2"][index].id;
                    content5 += "'";
                    content5 += ">";
                    content5 += response["midfielder2"][index].name + "(" + response["goalkeepers"][index].team + ", " + response["goalkeepers"][index].value + ")";
                    content5 += "</option>";

                }

                var content6 = "";
                for ( index = 0 ; index < response["forward1"].length ; index ++ ) {

                    content6 += "<option";
                    content6 += " value=";
                    content6 += "'";
                    content6 += response["forward1"][index].id;
                    content6 += "'";
                    content6 += ">";
                    content6 += response["forward1"][index].name + "(" + response["goalkeepers"][index].team + ", " + response["goalkeepers"][index].value + ")";
                    content6 += "</option>";

                }

                var content7 = "";
                for ( index = 0 ; index < response["forward2"].length ; index ++ ) {

                    content7 += "<option";
                    content7 += " value=";
                    content7 += "'";
                    content7 += response["forward2"][index].id;
                    content7 += "'";
                    content7 += ">";
                    content7 += response["forward2"][index].name + "(" + response["goalkeepers"][index].team + ", " + response["goalkeepers"][index].value + ")";
                    content7 += "</option>";

                }

                var content8 = "";
                for ( index = 0 ; index < response["questions"].length ; index ++ ) {

                    content8 += "<div class='row'>";
                    content8 += "<div class='col-sm-6 col-xs-12 text-right-left'>";
                    content8 += "<p class='player-label mt-10 mb-0-10'>";
                    content8 += response["questions"][index].number + ") " + response["questions"][index].text;
                    content8 += "</p></div>";
                    content8 += "<div class='col-sm-6 col-xs-12'>";
                    content8 += "<div class='w-100 maxwidth-250 mx-auto'>"
                    content8 += "<select name='q";
                    content8 += index + 1;
                    content8 += "' required>";

                    content8 += "<option disabled selected>Please Select!</option>"

                    var jindex;

                    for( jindex = 0 ; jindex < response["questions"][index].qinputs.length ; jindex ++) {
                        content8 += "<option value='";
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
                    content9 += response["fixtures"][index].teama + " VS " + response["fixtures"][index].teamb;
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

                preoption = "<option disabled selected value=\"\">Select GoalKeeper</option>";
                $("#goalkeeper").html(preoption + content1);
                preoption = "<option disabled selected value=\"\">Select Defender1</option>";
                $("#defender1").html(preoption + content2);
                preoption = "<option disabled selected value=\"\">Select Defender2</option>";
                $("#defender2").html(preoption + content3);
                preoption = "<option disabled selected value=\"\">Select Midfielder1</option>";
                $("#midfielder1").html(preoption + content4);
                preoption = "<option disabled selected value=\"\">Select Midfielder2</option>";
                $("#midfielder2").html(preoption + content5);
                preoption = "<option disabled selected value=\"\">Select Forward1</option>";
                $("#forward1").html(preoption + content6);
                preoption = "<option disabled selected value=\"\">Select Forward2</option>";
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

</script>
    
@endsection