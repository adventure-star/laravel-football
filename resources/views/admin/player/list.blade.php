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
                            <th>Remove</th>
                        </tr>
                        @if(isset($players) && count($players) > 0)
                            @foreach($players as $key => $item)
                                <tr>
                                    <td>{{$item["name"]}}</td>
                                    {{-- <td>{{App\Model\RealTeam::find($item["team"])['name']}}</td> --}}
                                    <td>{{$item["team"]}}</td>
                                    <td>{{$item["value"]}}</td>
                                    <td>{{App\Model\Round::find($item["round"])['roundno']}}</td>
                                    <td>{{$item["position"]}}</td>
                                    <td>
                                        <a href="{{route('players.edit', $item['id'])}}" class="btn btn-success-rgba"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success-rgba" onclick="deletePlayer({{$item['id']}})"><i class="fa fa-remove"></i></a>
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

@section('scripts')
    <script>
        function deletePlayer(id) {

            $.ajax({
                method: "post",
                url: "{{route('players.delete')}}",
                headers: {
                    'X-CSRF-TOKEN': '<?= csrf_token() ?>'
                },

                data : JSON.stringify({id : id}),
                datatype: 'JSON',
                contentType: 'application/json',

                async: true,
                success: function (data) {
                    console.log(data);
                    if(data) {
                        window.location = "{{route('players')}}";
                    }
                },
                error: function () {
                    console.log("error");
                }
            });
        }
    </script>

@endsection