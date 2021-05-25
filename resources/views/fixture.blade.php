@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>match fixtures</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Fixtures Area Start -->
<div id="fixtures-area" class="fixtures-area section pb-120 pt-120">
    <div class="container">
        <div class="row">
            
            <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                <!-- Fixtures Table -->
                <div class="table-responsive fixtures-table">
                    <table class="table">
                        <tr>
                            <th>match</th>
                            <th>date</th>
                            <th>time</th>
                            {{-- <th>venue</th> --}}
                        </tr>
                        @if(isset($fixtures) && count($fixtures) > 0)
                            @foreach($fixtures as $key => $item)
                                <tr>
                                <td>{{$item["teama"]}} VS {{$item["teamb"]}}</td>
                                <td>{{$item["date"]}}</td>
                                <td>{{$item["cet"]}}</td>
                                    {{-- <td>Santiago Bernabéu Stadium</td> --}}
                                </tr>
                            @endforeach
                        @endif
                        {{-- <tr>
                            <td>Abahani   VS   Brothers</td>
                            <td>25 jun 2017</td>
                            <td>9.00 pm</td>
                            <td>Santiago Bernabéu Stadium</td>
                        </tr>
                        <tr>
                            <td>Brothers   VS   Mohammedan</td>
                            <td>28 jun 2017</td>
                            <td>11.00 pm</td>
                            <td>Mohammedan Stadium</td>
                        </tr>
                        <tr>
                            <td>Arambagh KS   VS   Mohammedan</td>
                            <td>29 jun 2017</td>
                            <td>2.00 am</td>
                            <td>San Siro Stadium</td>
                        </tr>
                        <tr>
                            <td>Arambagh KS   VS   Abahani</td>
                            <td>02 july 2017</td>
                            <td>2.00 am</td>
                            <td>Allianz Arena</td>
                        </tr>
                        <tr>
                            <td>Arambagh KS   VS   Abahani</td>
                            <td>05 july 2017</td>
                            <td>11.00 pm</td>
                            <td>Camp Nou</td>
                        </tr>
                        <tr>
                            <td>Brothers   VS   Barselona</td>
                            <td>08 july 2017</td>
                            <td>12.00 pm</td>
                            <td>Santiago Bernabéu Stadium</td>
                        </tr>
                        <tr>
                            <td>Abahani   VS   Brothers</td>
                            <td>25 jun 2017</td>
                            <td>9.00 pm</td>
                            <td>Santiago Bernabéu Stadium</td>
                        </tr>
                        <tr>
                            <td>Brothers   VS   Mohammedan</td>
                            <td>28 jun 2017</td>
                            <td>11.00 pm</td>
                            <td>Mohammedan Stadium</td>
                        </tr>
                        <tr>
                            <td>Arambagh KS   VS   Mohammedan</td>
                            <td>29 jun 2017</td>
                            <td>2.00 am</td>
                            <td>San Siro Stadium</td>
                        </tr>
                        <tr>
                            <td>Arambagh KS   VS   Abahani</td>
                            <td>02 july 2017</td>
                            <td>2.00 am</td>
                            <td>Allianz Arena</td>
                        </tr>
                        <tr>
                            <td>Arambagh KS   VS   Abahani</td>
                            <td>05 july 2017</td>
                            <td>11.00 pm</td>
                            <td>Camp Nou</td>
                        </tr>
                        <tr>
                            <td>Brothers   VS   Arambagh KS</td>
                            <td>08 july 2017</td>
                            <td>12.00 pm</td>
                            <td>Santiago Bernabéu Stadium</td>
                        </tr> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fixtures Area End -->

@include('layouts.breakingnews')

@endsection