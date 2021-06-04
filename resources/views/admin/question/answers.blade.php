@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Contact Area Start -->
<div id="contact-area" class="contact-area section pb-90 pt-120">
    <div class="container">
        <div class="row text-center">
            <!-- Contact Form -->
            <div class="col-sm-10 col-sm-offset-1 col-xs-12 mb-30">
                <p class="question-title pb-10">Question: @if(isset($question)) {{$question["text"]}} @endif</p>
                <div class="table-responsive fixtures-table">
                    <table class="table">
                        <tr>
                            <th>Content</th>
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>
                        <input id="questionid" class="hidden" name="id" value={{$id}} />
                        @if(isset($question) && count($question->qinputs))
                            @foreach($question->qinputs as $key=>$value)
                                <tr>
                                    <td>{{$value["input"]}}</td>
                                    <td>
                                        <a href="{{route('qinputs.edit', $value['id'])}}" class="btn btn-success-rgba"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success-rgba" onclick="deleteAnswer({{$value['id']}})"><i class="fa fa-remove"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <p class="text-left-center py-4">
                            <a href="{{route('questions')}}" class="underline text-primary text-xl-right">All Questions</a>
                        </p>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <p class="text-right-center py-4">
                            <a href="{{route('qinputs.new', $id)}}" class="underline text-primary text-xl-right">Add New Answer to This Question</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

@endsection

@section('scripts')
    <script>
        function deleteAnswer(id) {

            $.ajax({
                method: "post",
                url: "{{route('qinputs.delete')}}",
                headers: {
                    'X-CSRF-TOKEN': '<?= csrf_token() ?>'
                },

                data : JSON.stringify({id : id}),
                datatype: 'JSON',
                contentType: 'application/json',

                async: true,
                success: function (data) {
                    if(data) {
                        let qid = $("#questionid").val();
                        window.location = "/questions/answers/" + qid;
                    }
                },
                error: function () {
                    console.log("error");
                }
            });
        }
    </script>

@endsection
