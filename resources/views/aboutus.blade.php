<!doctype html>
<html lang="en">
<head>
    <title>MOCA</title>
    <meta name="description" content="MOCA (Mobile Car Auto Body Estimator) connects people with ICBC Accredited Auto Body Shops with high quality service in Metro Vancouver. MOCA alleviates the stress and hassle that was recognized when people need to repair their cars."/>
    <meta name="keywords" content="cars,auto body,Vancouver,Surrey,Burnaby,Richmond">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ URL::asset('http://vjs.zencdn.net/5.11.8/video-js.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('https://use.fontawesome.com/0cbd855dec.js') }}"></script>
    <script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head><body>
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div id="navheader" class="container-fluid">
        <div class="navbar-header page-scroll">
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
                <li class="navoptions"><a href="/aboutus">About MOCA</a></li>
                <li class="navoptions" ><a href="/#title2">Get Free Quotes</a></li> {{--this works as a link--}}
                <li class="navoptions"><a href="#footer">Contact</a></li>
                <li class="navoptions"><a href="{{ URL::asset('https://www.facebook.com/mocaestimator') }}"><img src="{{ URL::asset('image/fbbtn.png') }}"></a></li>
                <li class="navoptions"><a href="{{ URL::asset('https://plus.google.com/114693879745430004744') }}"><img src="{{ URL::asset('image/glebtn.png') }}"></a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper">
    <video id="my-video" class="video-js" loop="true" muted autoplay preload="auto" width="100%" height="10%"
           poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
        <source src="{{ URL::asset('image/moca_mov.mp4') }}" type='video/mp4'>
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="{{ URL::asset('http://videojs.com/html5-video-support/') }}" target="_blank">supports HTML5 video</a>
        </p>
    </video>
    <h1 id="videotext">Do you have scratches or dents on your car?</h1>
    <div id="ojtitle">
        <h1>We, MOCA</h1>
    </div>
    <div id="descriptivetext">
        <h2><font color="#EF5F2B">will certainly help you out!</font></h2>
        <h2>MOCA (Mobile Car Auto Body Estimator) connects<br> people with <font color="#EF5F2B">ICBC Accredited Auto Body Shops</font> with<br> high quality service in <font color="light-blue">Metro Vancouver</font></h2>
        <h2>MOCA aleviates the stress and hassle<br> that was recognized when drivers need to repair their cars</h2>
        <h1 id="servicearea"><font color="#EF5F2B">Service Area</font></h1>
    </div>
    <div id="map">
        <img src="{{ URL::asset('image/map.jpg') }}" alt="Vancouver Map"/>
    </div>
    <div id="descriptivetext2">
        <h2><font color="light-blue">Send us three photos of the damaged part today.</font><br>We, then, provide you with estimates from nearby<br><font color="#EF5F2B">3~5 different auto body shops</font> within 24 hours.<br>And <font color="red">it's FREE</font> for you.<br>You will select one you like and get your car fixed.</h2>
    </div>
    <div id="ojtitle2">
        <h1>Benefits</h1>
    </div>
    <div id="descriptivetext3">
        <h1>A. Convenient</h1>
        <h2>:: Simply 3 photos will get you estimates from nearby 3~5 different <br>local auto body shops.</h2>
        <h2>:: Send the photos to us via our website, Email, or Facebook <br>message.</h2>
        <h1>B. Fast</h1>
        <h2>:: Within 24 hours, you will receive 3 ~ 5 estimates.</h2>
        <h1>C. Informative</h1>
        <h2>:: MOCA will send you profiles of the auto body shops.<br>You will have more information than just price</h2>
        <h1>D. Reliable</h1>
        <h2>:: All our partner auto body shops are ICBC accredited and deliver <br>superior quality.</h2>
        <h1>E. Free</h1>
        <h2>:: Yes! It's free.</h2>
    </div>
    <div id="quotes">
        <img src="{{ URL::asset('image/quotation.png') }}" alt="Quotation Icon"/>
        <h2><font color="#EF5F2B">GET FREE <br>QUOTES NOW!</font></h2>
    </div>
</div>
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
            <a href="{{ URL::asset('https://plus.google.com/114693879745430004744') }}"><img src="{{ URL::asset('image/glebtn.png') }}"></a>
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