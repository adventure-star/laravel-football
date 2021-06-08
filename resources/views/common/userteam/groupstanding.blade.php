@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Fixtures Area Start -->
<div id="fixtures-area" class="fixtures-area section pb-120 pt-120">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 col-xs-12 text-center">
                <div class="row">
                    <div class="mt-0 mb-20">
                        <h4>Select Expired Round</h4>
                        <select class="normal-component maxwidth-200" onchange="getResultsByRoundId(this)">
                            <option value="all">Total</option>
                            @if(isset($rounds) && count($rounds) > 0)
                                @foreach($rounds as $key => $round)
                                    <option value={{$round['id']}} @if(isset($queryround) && $queryround == $round['id']) selected @endif>{{$round['roundno']}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                @if(isset($queryround) && $queryround != 'all')
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
                                <th>Point</th>
                                <th>PointDetail</th>
                            </tr>
                            @if(isset($teams) && count($teams) > 0)
                                @foreach($teams as $key => $item)
                                    <tr>
                                        <td>{{App\User::find($item["jid"])["teamname"]}}</td>
                                        <td>{{App\Model\Round::find($item["round"])["roundno"] }}</td>
                                        <td>{{App\Model\Player::find($item["g"])["name"]}}</td>
                                        <td>{{App\Model\Player::find($item["d1"])["name"]}}</td>
                                        <td>{{App\Model\Player::find($item["d2"])["name"]}}</td>
                                        <td>{{App\Model\Player::find($item["m1"])["name"]}}</td>
                                        <td>{{App\Model\Player::find($item["m2"])["name"]}}</td>
                                        <td>{{App\Model\Player::find($item["f1"])["name"]}}</td>
                                        <td>{{App\Model\Player::find($item["f2"])["name"]}}</td>
                                        <td>{{$item['point']}}</td>
                                        <td>
                                            @if(!!$item["point"])
                                                <a class="btn btn-success-rgba" href="{{route('pointdetails', $item['id'])}}"><i class="fa fa-bookmark"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                @else
                    <div class="table-responsive fixtures-table">
                        <table class="table">
                            <tr>
                                <th>Team</th>
                                <th>Total Points</th>
                            </tr>
                            @if(isset($teams) && count($teams) > 0)
                                @foreach($teams as $key => $item)
                                    <tr>
                                        <td>{{App\User::find($item["jid"])["teamname"]}}</td>
                                        <td>{{$item['point']}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Fixtures Area End -->

@endsection

@section('scripts')
    <script>
        function getResultsByRoundId(e) {
            window.location.href = "{{route('groupstanding')}}?round=" + e.value;
        }
    </script>

@endsection