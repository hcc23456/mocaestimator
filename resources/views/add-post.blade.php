@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Post</div>

                        {{--validation messages--}}
                        <div class="container">
                            @if(session()->has('blogSaveFailure'))
                                <div class="alert alert-danger col-sm-5">
                                    {!! session()->get('blogSaveFailure') !!}
                                </div>
                            @endif

                            @if(session()->has('blogSaveSuccess'))
                                <div class="alert alert-success col-sm-5">
                                    {!! session()->get('blogSaveSuccess') !!}
                                </div>
                            @endif
                        </div><!--end validation msgs-->

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/add-post') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Blog Title</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 1</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body1"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 2</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body2"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 3</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body3"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 4</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body4"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 5</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body5"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 6</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body6"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 7</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 8</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body8"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 9</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body9"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 10</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body10"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 1</h3>
                                        <input type="file" name="pics[]">
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 2</h3>
                                        <input type="file" name="pics[]">
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 3</h3>
                                        <input type="file" name="pics[]">
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 4</h3>
                                        <input type="file" name="pics[]">
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 5</h3>
                                        <input type="file" name="pics[]">
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 6</h3>
                                        <input type="file" name="pics[]">
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 7</h3>
                                        <input type="file" name="pics[]">
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 8</h3>
                                        <input type="file" name="pics[]">
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 9</h3>
                                        <input type="file" name="pics[]">
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 10</h3>
                                        <input type="file" name="pics[]">
                                    </label>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Create
                                    </button>
                                </div>
                            </div>
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
