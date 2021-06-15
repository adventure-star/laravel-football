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
                            <th>match</th>
                            <th>date</th>
                            <th>time</th>
                            <th>group</th>
                            <th>round</th>
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>
                        @if(isset($fixtures) && count($fixtures) > 0)
                            @foreach($fixtures as $key => $item)
                                <tr>
                                    <td>{{App\Model\RealTeam::find($item["teama"])['name']}}-{{App\Model\RealTeam::find($item["teamb"])['name']}}</td>
                                    <td>{{$item["date"]}}</td>
                                    <td>{{$item["cet"]}}</td>
                                    <td>{{$item["group"]}}</td>
                                    <td>{{App\Model\Round::find($item["round"])['roundno']}}</td>
                                    <td>
                                        <a href="{{route('fixtures.edit', $item['id'])}}" class="btn btn-success-rgba"><i class="fa fa-edit"></i></a>
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
                                                    <p class="font-24">Do you want to remove this fixture?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary float-left" data-dismiss="modal">No</button>
                                                    <button type="button" class="btn btn-danger" onclick="deleteFixture({{$item['id']}})">Yes</button>
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
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <p class="text-right py-4">
                    <a href="{{route('fixtures.new')}}" class="underline text-primary text-xl-right">Add New Fixture</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Fixtures Area End -->

@endsection

@section('scripts')
    <script>
        function deleteFixture(id) {

            $.ajax({
                method: "post",
                url: "{{route('fixtures.delete')}}",
                headers: {
                    'X-CSRF-TOKEN': '<?= csrf_token() ?>'
                },

                data : JSON.stringify({id : id}),
                datatype: 'JSON',
                contentType: 'application/json',

                async: true,
                success: function (data) {
                    if(data) {
                        window.location = "{{route('fixtures')}}";
                    }
                },
                error: function () {
                    console.log("error");
                }
            });
        }
    </script>

@endsection