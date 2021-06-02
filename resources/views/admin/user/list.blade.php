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
                            <th>Remove</th>
                        </tr>
                        @if(isset($users) && count($users) > 0)
                            @foreach($users as $key => $item)
                                <tr>
                                    <td>{{$item["fullname"]}}</td>
                                    <td>{{$item["teamname"]}}</td>
                                    <td>{{$item["username"]}}</td>
                                    <td>{{$item["email"]}}</td>
                                    <td>
                                        <a class="btn btn-success-rgba" onclick="deleteUser({{$item['id']}})"><i class="fa fa-remove"></i></a>
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
                    console.log(data);
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