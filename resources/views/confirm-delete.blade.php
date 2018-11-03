@extends('layouts.app')

@section('content')
    <style>
        #yes,
        #no{
            display: inline-block;
            vertical-align: top;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Confirm Deletion</div>
                    <div class="panel-body">
                        <span>Are you sure you want to delete this post?</span>
                        @foreach ($blog_post as $blogDelete) {{--inital object holding collection in array passed--}}
                            <br><br>
                            <span style="font-weight:bold">{{ $blogDelete['title'] }}</span>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <button id="yes" class="btn btn-primary btn-md center-block" style="width: 100px;">Yes</button>
                                    <button id="no" class="btn btn-danger btn-md center-block" style="width: 100px;">No</button>
                                </div>
                            </div>
                        <br><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //custom JS for this page
        $(document).ready(function() {
            $('#yes').click(function(){
                var url = "{{ url('delete-post/'.$blogDelete['post_id']) }}";
                window.location = url;
            });
            $('#no').click(function(){
                history.back();
            });
        });
    </script>
@endsection

