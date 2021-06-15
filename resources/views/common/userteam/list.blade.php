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
                            @if(Auth::user()->isadmin == 1)
                                <th>Remove</th>
                            @endif
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
                                    @if(Auth::user()->isadmin == 1)
                                        <td>
                                            <a class="btn btn-success-rgba" data-toggle="modal" data-target="#deletemodal{{$item['id']}}"><i class="fa fa-remove"></i></a>
                                        </td>
                                    @endif
                                </tr>
                                @if(Auth::user()->isadmin == 1)
                                    <div class="modal fade" id="deletemodal{{$item['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="vertical-alignment-helper">
                                            <div class="modal-dialog vertical-align-center">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                    
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">Sofa League</h4>
                                    
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="font-24">Do you want to remove this userteam?</p>
                                                        <p class="font-14">All the results for this userteam will be removed.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary float-left" data-dismiss="modal">No</button>
                                                        <button type="button" class="btn btn-danger" onclick="deleteUserTeam({{$item['id']}})">Yes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fixtures Area End -->

@endsection

@section('scripts')
    <script>
        function deleteUserTeam(id) {

            $.ajax({
                method: "post",
                url: "{{route('userteams.delete')}}",
                headers: {
                    'X-CSRF-TOKEN': '<?= csrf_token() ?>'
                },

                data : JSON.stringify({id : id}),
                datatype: 'JSON',
                contentType: 'application/json',

                async: true,
                success: function (data) {
                    if(data) {
                        window.location = "{{route('userteams')}}";
                    }
                },
                error: function () {
                    console.log("error");
                }
            });
        }
    </script>

@endsection