@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Your Posts</div>

                    {{--validation messages--}}
                    <div class="container">
                        @if(session()->has('deleteBlogPostFailure'))
                            <div class="alert alert-danger col-sm-5">
                                {!! session()->get('deleteBlogPostFailure') !!}
                            </div>
                        @endif

                        @if(session()->has('deleteBlogPostSuccess'))
                            <div class="alert alert-success col-sm-5">
                                {!! session()->get('deleteBlogPostSuccess') !!}
                            </div>
                        @endif
                    </div><!--end validation msgs-->

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Post ID</th>
                                <th>Post Title</th>
                                <th>Created Time</th>
                                <th>Updated Time</th>
                                <th>Delete Post</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($user_blog as $userBlogEntry) {{--inital object holding collection in array passed--}}
                                @foreach($userBlogEntry as $userBlogPost) {{--each entry in collection--}}
                                <tr>
                                    <td>{{ $userBlogPost['post_id'] }}</td>
                                    <!--could use dynamic link instead of hardcoding route url-->
                                    <td><a class="btn btn-link" href="/modify-post/{{ $userBlogPost['post_id'] }}">{{ $userBlogPost['title'] }}</a></td>
                                    <td>{{ $userBlogPost['created_at'] }}</td>
                                    <td>{{ $userBlogPost['updated_at'] }}</td>
                                    <!--could use dynamic link instead of hardcoding route url-->
                                    <td><a class="btn btn-link" href="/confirm-delete/{{ $userBlogPost['post_id'] }}">DELETE</a></td>
                                </tr>
                                @endforeach
                                <br><br>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //custom JS for this page
        /*$(document).ready(function() {
            //using confirm delete page instead of alert
        });*/
    </script>
@endsection

