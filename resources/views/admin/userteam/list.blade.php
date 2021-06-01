@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>joined teams</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Fixtures Area Start -->
<div id="fixtures-area" class="fixtures-area section pb-120 pt-120">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 col-xs-12 text-center">
                <!-- Fixtures Table -->
                <div class="table-responsive fixtures-table">
                    <table class="table">
                        <tr>
                            <th>Team</th>
                            <th>round</th>
                            <th>G</th>
                            <th>D1</th>
                            <th>D2</th>
                            <th>M1</th>
                            <th>M2</th>
                            <th>F1</th>
                            <th>F2</th>
                        </tr>
                        @if(isset($teams) && count($teams) > 0)
                            @foreach($teams as $key => $item)
                                <tr>
                                    <td>{{App\User::find($item["jid"])["teamname"]}}</td>
                                    <td>{{$item["round"]}}</td>
                                    <td>{{App\Model\Player::find($item["g"])["name"]}}</td>
                                    <td>{{App\Model\Player::find($item["d1"])["name"]}}</td>
                                    <td>{{App\Model\Player::find($item["d2"])["name"]}}</td>
                                    <td>{{App\Model\Player::find($item["m1"])["name"]}}</td>
                                    <td>{{App\Model\Player::find($item["m2"])["name"]}}</td>
                                    <td>{{App\Model\Player::find($item["f1"])["name"]}}</td>
                                    <td>{{App\Model\Player::find($item["f2"])["name"]}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fixtures Area End -->

@include('layouts.breakingnews')

@endsection