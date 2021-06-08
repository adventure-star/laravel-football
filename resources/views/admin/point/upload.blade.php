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
                <div class="submit-form">
                    <div class="mt-40">
                        <h4>Import CSV file for Player Points</h4>
                        <form id="pointuploadform" action="{{route('uploads.point')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="custom-file-upload">
                                <input onchange="upload()" class="hidden" type="file" name="file" />
                                Import
                            </label>
                        </form>
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
        function upload() {
            document.getElementById("pointuploadform").submit();
        }
    </script>
@endsection
