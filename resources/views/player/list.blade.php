@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>rounds</h2>
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
                            <th>Name</th>
                            <th>Team</th>
                            <th>Value</th>
                            <th>Round</th>
                            <th>Position</th>
                            <th>Edit</th>
                        </tr>
                        @if(isset($players) && count($players) > 0)
                            @foreach($players as $key => $item)
                                <tr>
                                    <td>{{$item["name"]}}</td>
                                    <td>{{$item["team"]}}</td>
                                    <td>{{$item["value"]}}</td>
                                    <td>{{$item["round"]}}</td>
                                    <td>{{$item["position"]}}</td>
                                    <td>
                                        <a href="{{route('players.edit', $item['id'])}}" class="btn btn-success-rgba"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <p class="text-right py-4">
                    <a href="{{route('players.new')}}" class="underline text-primary text-xl-right">Add New Player</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Fixtures Area End -->

@include('layouts.breakingnews')

@endsection