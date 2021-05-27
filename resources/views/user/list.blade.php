@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>Users</h2>
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
                            <th>FullName</th>
                            <th>TeamName</th>
                            <th>UserName</th>
                            <th>Email</th>
                        </tr>
                        @if(isset($users) && count($users) > 0)
                            @foreach($users as $key => $item)
                                <tr>
                                    <td>{{$item["fullname"]}}</td>
                                    <td>{{$item["teamname"]}}</td>
                                    <td>{{$item["username"]}}</td>
                                    <td>{{$item["email"]}}</td>
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