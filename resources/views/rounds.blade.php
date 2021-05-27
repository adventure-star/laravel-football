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
                            <th>RoundNo</th>
                            <th>State</th>
                            <th>Edit</th>
                        </tr>
                        @if(isset($rounds) && count($rounds) > 0)
                            @foreach($rounds as $key => $item)
                                <tr>
                                    <td>{{$item["roundno"]}}</td>
                                    <td>{{$item["ended"] == 0 ? "Not Opened" : ($item["ended"] == 1 ? "Active" : "Expired")}}</td>
                                    <td>
                                    <a href="{{route('rounds.edit', $item['id'])}}" class="btn btn-success-rgba"><i class="fa fa-edit"></i></a>
                                    </td>
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