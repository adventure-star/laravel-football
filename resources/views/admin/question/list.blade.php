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
                            <th>Round</th>
                            <th>Number</th>
                            <th>Text</th>
                            <th>Answers</th>
                            <th>Edit</th>
                        </tr>
                        @if(isset($questions) && count($questions) > 0)
                            @foreach($questions as $key => $item)
                                @foreach($item as $key => $el)
                                    <tr>
                                        @if($key == 0)
                                            <td rowspan={{count($item)}}>{{$el["round"]}}</td>
                                        @endif
                                        <td>{{$el["number"]}}</td>
                                        <td>{{$el["text"]}}</td>
                                        <td>
                                            <a href="{{route('questions.answers', $el['id'])}}" class="btn btn-success-rgba"><i class="fa fa-bookmark"></i></a>
                                        </td>
                                        @if($key == 0)
                                            <td rowspan={{count($item)}}>
                                                <a href="{{route('questions.round.edit', $el['round'])}}" class="btn btn-success-rgba"><i class="fa fa-edit"></i></a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            @endforeach
                        @endif
                        @if(isset($roundwithoutquestions) && count($roundwithoutquestions) > 0)
                            @foreach($roundwithoutquestions as $key => $item)
                                <tr>
                                    <td>{{App\Model\Round::find($item)->roundno}}</td>
                                    <td colspan="3">No Questions</td>
                                    <td>
                                        <a href="{{route('questions.round.edit', $item)}}" class="btn btn-success-rgba"><i class="fa fa-edit"></i></a>
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

@endsection