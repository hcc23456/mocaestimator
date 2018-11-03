@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Post</div>

                    {{--validation messages--}}
                    <div class="container">
                        @if(session()->has('editBlogSaveFailure'))
                            <div class="alert alert-danger col-sm-5">
                                {!! session()->get('editBlogSaveFailure') !!}
                            </div>
                        @endif

                        @if(session()->has('editBlogSaveSuccess'))
                            <div class="alert alert-success col-sm-5">
                                {!! session()->get('editBlogSaveSuccess') !!}
                            </div>
                        @endif
                    </div><!--end validation msgs-->

                    <div class="panel-body">
                        @foreach($blog_post as $post) {{--should only ever be 1 object but need to access key value using loop--}}
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/modify-post/'.$post['post_id']) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input type="hidden" name="post_id" readonly value="{{$post['post_id']}}">

                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">Blog Title</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{$post['title']}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 1</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body1">{{$post['text_body1']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 2</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body2">{{$post['text_body2']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 3</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body3">{{$post['text_body3']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 4</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body4">{{$post['text_body4']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 5</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body5">{{$post['text_body5']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 6</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body6">{{$post['text_body6']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 7</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body7">{{$post['text_body7']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 8</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body8">{{$post['text_body8']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 9</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body9">{{$post['text_body9']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="text_body" class="col-md-4 control-label">Blog Text Body 10</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" rows="20" id="text_body" name="text_body10">{{$post['text_body10']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 1</h3>
                                        <input type="file" id="the-photo-file-field1" name="pics[]">
                                        <div id="preview1">
                                            <!--image will be inserted here-->
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 2</h3>
                                        <input type="file" id="the-photo-file-field2" name="pics[]">
                                        <div id="preview2">
                                            <!--image will be inserted here-->
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 3</h3>
                                        <input type="file" id="the-photo-file-field3" name="pics[]">
                                        <div id="preview3">
                                            <!--image will be inserted here-->
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 4</h3>
                                        <input type="file" id="the-photo-file-field4" name="pics[]">
                                        <div id="preview4">
                                            <!--image will be inserted here-->
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 5</h3>
                                        <input type="file" id="the-photo-file-field5" name="pics[]">
                                        <div id="preview5">
                                            <!--image will be inserted here-->
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 6</h3>
                                        <input type="file" id="the-photo-file-field6" name="pics[]">
                                        <div id="preview6">
                                            <!--image will be inserted here-->
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 7</h3>
                                        <input type="file" id="the-photo-file-field7" name="pics[]">
                                        <div id="preview7">
                                            <!--image will be inserted here-->
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 8</h3>
                                        <input type="file" id="the-photo-file-field8" name="pics[]">
                                        <div id="preview8">
                                            <!--image will be inserted here-->
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 9</h3>
                                        <input type="file" id="the-photo-file-field9" name="pics[]">
                                        <div id="preview9">
                                            <!--image will be inserted here-->
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!--<div class="col-md-4">-->
                                <div class="caption">
                                    <label class="btn btn-default btn-file"><h3>Picture 10</h3>
                                        <input type="file" id="the-photo-file-field10" name="pics[]">
                                        <div id="preview10">
                                            <!--image will be inserted here-->
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Modify
                                    </button>
                                </div>
                            </div>

                        </form><!--end form-->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        //custom JS for this page
        $(document).ready(function() {
            //display images from page loaded - could use a loop here
            $('#preview1').html('{!! '<img src="data:image/jpeg;base64,'.base64_encode( $post['pic1'] ).'"/>' !!}');
            $('#preview2').html('{!! '<img src="data:image/jpeg;base64,'.base64_encode( $post['pic2'] ).'"/>' !!}');
            $('#preview3').html('{!! '<img src="data:image/jpeg;base64,'.base64_encode( $post['pic3'] ).'"/>' !!}');
            $('#preview4').html('{!! '<img src="data:image/jpeg;base64,'.base64_encode( $post['pic4'] ).'"/>' !!}');
            $('#preview5').html('{!! '<img src="data:image/jpeg;base64,'.base64_encode( $post['pic5'] ).'"/>' !!}');
            $('#preview6').html('{!! '<img src="data:image/jpeg;base64,'.base64_encode( $post['pic6'] ).'"/>' !!}');
            $('#preview7').html('{!! '<img src="data:image/jpeg;base64,'.base64_encode( $post['pic7'] ).'"/>' !!}');
            $('#preview8').html('{!! '<img src="data:image/jpeg;base64,'.base64_encode( $post['pic8'] ).'"/>' !!}');
            $('#preview9').html('{!! '<img src="data:image/jpeg;base64,'.base64_encode( $post['pic9'] ).'"/>' !!}');
            $('#preview10').html('{!! '<img src="data:image/jpeg;base64,'.base64_encode( $post['pic10'] ).'"/>' !!}');

            //check if browser supports file api and filereader features
            if(window.File && window.FileReader && window.FileList && window.Blob) {

                //this is not completely neccesary, just a nice function I found to make the file size format friendlier
                //http://stackoverflow.com/questions/10420352/converting-file-size-in-bytes-to-human-readable
                function humanFileSize(bytes, si) {
                    var thresh = si ? 1000 : 1024;
                    if(bytes < thresh) return bytes + ' B';
                    var units = si ? ['kB','MB','GB','TB','PB','EB','ZB','YB'] : ['KiB','MiB','GiB','TiB','PiB','EiB','ZiB','YiB'];
                    var u = -1;
                    do {
                        bytes /= thresh;
                        ++u;
                    } while(bytes >= thresh);
                    return bytes.toFixed(1)+' '+units[u];
                }

                //this function is called when the input loads an image
                function renderImage(file, picNumber){
                    var reader = new FileReader();
                    reader.onload = function(event){
                        the_url = event.target.result;
                        //of course using a template library like handlebars.js is a better solution than just inserting a string
                        //load the selected image to the appropriate spot chosen
                        if(picNumber==1){
                            $('#preview1').html("<img src='"+the_url+"' />")
                        }else if(picNumber==2) {
                            $('#preview2').html("<img src='"+the_url+"' />")
                        }else if(picNumber==3){
                            $('#preview3').html("<img src='"+the_url+"' />")
                        }else if(picNumber==4){
                            $('#preview4').html("<img src='"+the_url+"' />")
                        }else if(picNumber==5){
                            $('#preview5').html("<img src='"+the_url+"' />")
                        }else if(picNumber==6){
                            $('#preview6').html("<img src='"+the_url+"' />")
                        }else if(picNumber==7){
                            $('#preview7').html("<img src='"+the_url+"' />")
                        }else if(picNumber==8){
                            $('#preview8').html("<img src='"+the_url+"' />")
                        }else if(picNumber==9){
                            $('#preview9').html("<img src='"+the_url+"' />")
                        }else if(picNumber==10){
                            $('#preview10').html("<img src='"+the_url+"' />")
                        }
                    };

                    //when the file is read it triggers the onload event above.
                    reader.readAsDataURL(file);
                }


                //watch for change on the element
                $("#the-photo-file-field1" ).change(function() {
                    console.log("photo file has been chosen");
                    //grab the first image in the fileList
                    //in this example we are only loading one file.
                    renderImage(this.files[0], 1)
                });
                $("#the-photo-file-field2" ).change(function() {
                    console.log("photo file has been chosen");
                    //grab the first image in the fileList
                    //in this example we are only loading one file.
                    renderImage(this.files[0], 2)
                });
                $("#the-photo-file-field3" ).change(function() {
                    console.log("photo file has been chosen");
                    //grab the first image in the fileList
                    //in this example we are only loading one file.
                    renderImage(this.files[0], 3)
                });
            }else{
                alert('The File APIs are not fully supported in this browser.');
            }
        });
    </script>
@endsection


