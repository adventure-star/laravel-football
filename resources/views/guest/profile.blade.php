@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Profile Area Start -->
<div id="fixtures-area" class="fixtures-area section pb-120 pt-120">
    <div class="container">
        @if($user)
            <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                <!-- Fixtures Table -->
                <div class="table-responsive fixtures-table">
                    <table class="table">
                        <tr>
                            <td>Full Name</td>
                            <td>{{$user['fullname']}}</td>
                        </tr>
                        <tr>
                            <td>Team Name</td>
                            <td>{{$user['teamname']}}</td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td>{{$user['username']}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$user['email']}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        @endif
    </div>
</div>
<!-- Profile Area End -->

@endsection