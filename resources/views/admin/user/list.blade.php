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
                            <th>FullName</th>
                            <th>TeamName</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Marketing</th>
                            <th>Paid</th>
                            <th>Remove</th>
                        </tr>
                        @if(isset($users) && count($users) > 0)
                            @foreach($users as $key => $item)
                                <tr>
                                    <td>{{$item["fullname"]}}</td>
                                    <td>{{$item["teamname"]}}</td>
                                    <td>{{$item["username"]}}</td>
                                    <td>{{$item["email"]}}</td>
                                    <td>{{$item["ismarketing"] == 1 ? "Yes" : "No"}}</td>
                                    <td>
                                        <input type="checkbox" class="cursor-pointer" @if($item["ispaid"] == 1) checked @endif onchange="changepaidstate({{$item['id']}})" />
                                    </td>
                                    <td>
                                        <a class="btn btn-success-rgba" data-toggle="modal" data-target="#deletemodal{{$item['id']}}"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
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
                                                    <p class="font-24">Do you want to remove this user?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary float-left" data-dismiss="modal">No</button>
                                                    <button type="button" class="btn btn-danger" onclick="deleteUser({{$item['id']}})">Yes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
        function deleteUser(id) {

            $.ajax({
                method: "post",
                url: "{{route('users.delete')}}",
                headers: {
                    'X-CSRF-TOKEN': '<?= csrf_token() ?>'
                },

                data : JSON.stringify({id : id}),
                datatype: 'JSON',
                contentType: 'application/json',

                async: true,
                success: function (data) {
                    if(data) {
                        window.location = "{{route('users')}}";
                    }
                },
                error: function () {
                    console.log("error");
                }
            });
        }
        function changepaidstate(id) {
            console.log("id-----", id);
            $.ajax({
                method: "post",
                url: "{{route('users.paid')}}",
                headers: {
                    'X-CSRF-TOKEN': '<?= csrf_token() ?>'
                },

                data : JSON.stringify({id : id}),
                datatype: 'JSON',
                contentType: 'application/json',

                async: true,
                success: function (data) {
                    if(data) {
                        window.location = "{{route('users')}}";
                    }
                },
                error: function () {
                    console.log("error");
                }
            });

        }
    </script>

@endsection