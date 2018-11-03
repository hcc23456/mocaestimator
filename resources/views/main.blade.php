<!doctype html>
<html lang="en">
<head>
    <title>MOCA Auto Body Estimator</title>
    <meta name="description" content="Send us 4 Photos of Damage & Get 5 Free Quotes Today from 5 different body shops."/>
    <meta name="keywords" content="cars,auto body,Vancouver,Surrey,Burnaby,Richmond">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div id="navheader" class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/"><img id="logo" src="{{ URL::asset('image/logo-1.png') }}" alt="Logo of Website"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="navoptions"><a href="/aboutus">About MOCA</a></li> {{--this works as a link--}}
                <li class="navoptions" ><a href="#title2">Get Free Quotes</a></li>
                <li class="navoptions"><a href="#footer">Contact</a></li>
                <li class="navoptions"><a href="{{ URL::asset('https://www.facebook.com/mocaestimator') }}"><img src="{{ URL::asset('image/fbbtn.png') }}"></a></li>
                <li class="navoptions"><a href="{{ URL::asset('https://plus.google.com/114693879745430004744') }}"><img src="{{ URL::asset('image/glebtn.png') }}"></a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="wrapper">
    <div id="video" class="container">
        <p>Looking for <br><font color="#EF5F2B">Auto Body Shops</font><br> in <font color="#3393C8">Metro Vancouver?</font><br><br>Send 3 PHOTOS & Get 5 QUOTES to Compare</p>
    </div>

    {{--validation messages--}}
    <div class="container">
        {{--display errors if any--}}
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger col-sm-5" role="alert">
                {!! $error !!}
            </div>
        @endforeach

        {{--if no pictures uploaded--}}
        @if(session()->has('noPics'))
            <div class="alert alert-danger col-sm-5">
                {!! session()->get('noPics') !!}
            </div>
        @endif

        {{--if not 3 pictures uploaded--}}
        @if(session()->has('failPic'))
            <div class="alert alert-danger col-sm-5">
                {!! session()->get('failPic') !!}
            </div>
        @endif

        @if(session()->has('emailFailure'))
            <div class="alert alert-danger col-sm-5">
                {!! session()->get('emailFailure') !!}
            </div>
        @endif

        @if(session()->has('emailSuccess'))
            <div class="alert alert-success col-sm-5">
                {!! session()->get('emailSuccess') !!}
            </div>
        @endif
    </div><!--end validation msgs-->

    <!--mobile only-->
    <div id="mobileonlytext" class="container">
        <div>
            <a><h1>GET <font color="#EF5F2B">QUOTES</font> TODAY!</font></h1></a>
            <h1><font color="#EF5F2B">COMPARE</font> PRICES, SERVICES & LOCATIONS</h1>
        </div>
    </div>
    <!--end mobile only-->
    <div id="desktoptext" class="container">
        <div id="infotitle">
            <h1><font color="#EF5F2B">What is <font color="#3393C8">MOCA</font> Estimator?</font></h1>
        </div>
        <div>
            <p style="font-size: 20px;">MOCA (Mobile Car Auto Body Estimator) connects people with ICBC Accredited Auto Body Shops with high quality service in Metro Vancouver. MOCA alleviates the stress and hassle that was recognized when people need to repair their cars. </p>
        </div>
        <div id="locations">
            <p style="font-size: 20px;">:: Service Area: Vancouver, North Vancouver, Burnaby, Richmond, Coquitlam, Port Coquitlam, New Westminster, Surrey, & Langley</p>
        </div>
        <div id="infobox" class="row">
            <div class="col-xs-5 col-md-2 imagethumbnail">
                <h3 class="infosteps">Step 1</h3>
                <img src="{{ URL::asset('image/cam.png') }}" />
                <h3>Take 3 Photos</h3>
            </div>
            <div class="col-xs-6 col-md-2 imagethumbnail">
                <h3 class="infosteps">Step 2</h3>
                <img src="{{ URL::asset('image/mail.png') }}" />
                <h3>Send Us Photos</h3>
            </div>
            <div class="col-xs-6 col-md-2 imagethumbnail">
                <h3 class="infosteps">Step 3</h3>
                <img src="{{ URL::asset('image/quotes.png') }}" />
                <h3>Receive <br>3-5 Quotes</h3>
            </div>
            <div class="col-xs-6 col-md-2 imagethumbnail">
                <h3 class="infosteps">Step 4</h3>
                <img src="{{ URL::asset('image/car.png') }}" />
                <h3>Select & Fix Your Car</h3>
            </div>
        </div>
    </div>
    <div id="steps" class="container">
        <div id="title" class="row col-md-12">
            <div id="stepimage" class="col-xs-4 col-md-1">
                <img class="step" src="{{ URL::asset('image/cam.png') }}" />
            </div>
            <div class="col-xs-8 col-md-4">
                <h2><font style="color:rgb(239, 95, 43);">STEP 1</font><br><font style="font-weight: bold;">Take 3 Photos of the Damage</font><br><font style="color:rgb(128, 128, 128);">Front,Left, & Right</font></h2>
            </div>
        </div>
        <div id="phototitle">
            <h1>SAMPLE PHOTOS</h1>
        </div>
        <div id="samplephoto" class="row">
            <div class="col-md-4">
                <h3>Front Angle</h3>
                <img src="{{ URL::asset('image/sam1_fnt.jpg') }}">
            </div>
            <div class="col-md-4">
                <h3>Left Angle</h3>
                <img src="{{ URL::asset('image/sam2_lft.jpg') }}">
            </div>
            <div class="col-md-4">
                <h3>Right Angle</h3>
                <img src="{{ URL::asset('image/sam3_rgt.jpg') }}">
            </div>
        </div>
        <div class="col-md-2">
        </div>
        <div id="title2" class="row col-md-12">
            <div id="stepimage" class="col-xs-4 col-md-1">
                <img class="step" src="{{ URL::asset('image/mail.png') }}" />
            </div>
            <div class="col-xs-7 col-md-3">
                <h2><font style="color:rgb(239, 95, 43);">STEP 2</font><br>Upload Photos<br><font style="color:rgb(128, 128, 128);">Contact Info</font></h2>
            </div>
        </div>
        <div id="forminfo" class="row">
            <div class="col-md-1">
            </div>
            <div class="col-xs-12 col-md-7">
                <h4>or Email the photos to info@mocaestimator.com</h4>
            </div>
        </div>

        <div id="form" class="container">
            <div class="row">
                <form class="form-horizontal col-md-16" method="post" action="/" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">NAME:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="client_name">
                        </div>
                    </div>
                    <div id="nameForm">
                        <p></p>
                    </div>
                    <div class="form-group">
                        <label for="inputCarMake" class="col-sm-2 control-label">CAR MAKE:</label>
                        <div  class="col-sm-9">
                            <input type="text" class="form-control" id="inputCarMake" placeholder="Car Make" name="car_make">
                        </div>
                    </div>
                    <div id="carMakeForm">
                        <p></p>
                    </div>
                    <div class="form-group">
                        <label for="inputCarModel" class="col-sm-2 control-label">CAR MODEL:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCarModel" placeholder="Car Model" name="car_model">
                        </div>
                    </div>
                    <div id="carModelForm">
                        <p></p>
                    </div>
                    <div class="form-group">
                        <label for="inputCarYear" class="col-sm-2 control-label">CAR YEAR:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="inputCarYear" placeholder="Car Year" name="car_year">
                        </div>
                    </div>
                    <div id="carYearForm">
                        <p></p>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">EMAIL:</label>
                        <div  class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="client_email">
                        </div>
                    </div>
                    <div id="emailForm">
                        <p></p>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress" class="col-sm-2 control-label">ADDRESS:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="client_address">
                        </div>
                    </div>
                    <div id="addressForm">
                        <p></p>
                    </div>
                    <div class="form-group">
                        <label for="inputPhoneNumber" class="col-sm-2 control-label">PHONE NUMBER:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="inputPhoneNumber" placeholder="Phone Number" name="client_phonenumber">
                        </div>
                    </div>
                    <div id="phoneNumberForm">
                        <p></p>
                    </div>
                    <div id="memoForm" class="form-group">
                        <label for="inputMemo" class="col-sm-2 control-label">MEMO:</label>
                        <div  class="col-sm-9">
                            <input type="text" class="form-control" id="inputPhoneNumber" placeholder="Additional Info" name="client_memo">
                        </div>
                        <p></p>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        </div>
                    </div>
                    <div id="photoupload" class="row">
                        <div class="col-md-4">
                            <div class="caption">
                                <label class="btn btn-default btn-file"><h3>Click Here To Upload <br>Front Angle Photo</h3>
                                    <input type="file" name="photos[]">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="caption">
                                <label class="btn btn-default btn-file"><h3>Click Here To Upload <br>Left Angle Photo</h3>
                                    <input type="file" name="photos[]">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="caption">
                                <label class="btn btn-default btn-file"><h3>Click Here To Upload <br>Right Angle Photo</h3>
                                    <input type="file" name="photos[]">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="tehbutton">
                        <button id="submit" type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form><!--end form-->
			<div id="uploadinfo"> 
				<p>Uploading will take a few seconds. Please, do not refresh the page.</p> 
			</div> 
            </div>
        </div><!--end form container-->
        <div id="title3" class="row col-md-12">
            <div id="stepimage" class="col-xs-4 col-md-1">
                <img class="step" src="{{ URL::asset('image/quotes.png') }}" />
            </div>
            <div id="step3text" class="col-xs-8 col-md-3">
                <h2><font style="color:rgb(239, 95, 43);">STEP 3</font><br><font style="font-weight: bold;">Receive 3-5 Quotes</font><br><font style="color:rgb(128, 128, 128);">From Different<br> Auto Body Shops</font></h2>
            </div>
        </div>
        <div id="steps3" class="row">
            <div class="col-xs-16 col-md-12">
                <h2>You will receive 3-5 estimates from different auto body shops <font color="#EF5F2B">QUOTES</font> TODAY!</font><br><br>
                    <font color="#EF5F2B">COMPARE</font> PRICES, SERVICES & LOCATIONS</h2>
            </div>
        </div>
        <div id="title4" class="row col-md-12">
            <div id="stepimage" class="col-xs-4 col-md-1">
                <img class="step" src="{{ URL::asset('image/car.png') }}" />
            </div>
            <div id="step4text" class="col-xs-8 col-md-3">
                <h2><font style="color:rgb(239, 95, 43);">STEP 4</font><br><font style="font-weight: bold;">Select One Shop</font><br><font style="color:rgb(128, 128, 128);">& Fix Your Car</font></h2>
            </div>
        </div>
        <div id="steps4" class="row">
            <div class="col-xs-16 col-md-12">
                <h2>After reviewing estimates, feel free to contact <br>your <font color="#EF5F2B">preferred body shop</font> to make an appointment</font></h2>
            </div>
        </div>
    </div>
</div>
<!--start mobile version-->
<div id="mobiletext" class="container">
    <div id="infotitle">
        <h1><font color="#EF5F2B">What is <font color="#3393C8">MOCA</font> Estimator?</font></h1>
    </div>
    <div>
        <p style="font-size: 20px;">MOCA (Mobile Car Auto Body Estimator) connects people with ICBC Accredited Auto Body Shops with high quality service in Metro Vancouver. MOCA alleviates the stress and hassle that was recognized when people need to repair their cars. </p>
    </div>
    <div id="locations">
        <p style="font-size: 20px;">:: Service Area: Vancouver, North Vancouver, Burnaby, Richmond, Coquitlam, Port Coquitlam, New Westminster, Surrey, & Langley</p>
    </div>
    <div id="infobox" class="row">
        <div class="col-xs-6 col-md-3 imagethumbnail">
            <h3 class="infosteps">Step 1</h3>
            <img src="{{ URL::asset('image/cam.png') }}" />
            <h3>Photos</h3>
        </div>
        <div class="col-xs-6 col-md-3 imagethumbnail">
            <h3 class="infosteps">Step 2</h3>
            <img src="{{ URL::asset('image/mail.png') }}" />
            <h3>Send Us</h3>
        </div>
        <div class="col-xs-6 col-md-3 imagethumbnail">
            <h3 class="infosteps">Step 3</h3>
            <img src="{{ URL::asset('image/quotes.png') }}" />
            <h3>Receive Quotes</h3>
        </div>
        <div class="col-xs-6 col-md-3 imagethumbnail">
            <h3 class="infosteps">Step 4</h3>
            <img src="{{ URL::asset('image/car.png') }}" />
            <h3>Select & Fix Your Car</h3>
        </div>
    </div>
</div><!--end mobile version-->

<div id="footer" class="container">
    <img id="logo2" src="{{ URL::asset('image/logo-1.png') }}" alt="Logo Icon">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-xs-12 col-md-3">
            <h1>Contact Us</h1>
            <h2 class="footertext"><i class="fa fa-envelope" aria-hidden="true"></i> info@MOCAestimator.com</h2>
            <h2 class="footertext"><i class="fa fa-phone" aria-hidden="true"></i> (604) 704-4782</h2>
        </div>
        <div id="socialmedia" class="col-xs-12 col-md-3">
            <h1>Follow Us</h1>
            <a href="{{ URL::asset('https://www.facebook.com/mocaestimator') }}"><img src="{{ URL::asset('image/fbbtn.png') }}"></a>
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>
            </a>
            <a href="{{ URL::asset('https://plus.google.com/114693879745430004744') }}"><img src="{{ URL::asset('image/glebtn.png') }}"></a>
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-google-plus-official fa-stack-1x fa-inverse"></i>
          </span>
            </a>
        </div>
    </div>
    <h3>© 2016 MOCAestimator All Rights Reserved.</h3>
</div>

<script src="{{ URL::asset('js/scripts.js') }}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-80919636-1', 'auto');
    ga('send', 'pageview');
</script>

</body>
</html>