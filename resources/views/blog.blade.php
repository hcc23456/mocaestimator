<!doctype html>
<html lang="en">
<head>
    <title>MOCA</title>
    <meta name="description" content="MOCA (Mobile Car Auto Body Estimator) connects people with ICBC Accredited Auto Body Shops with high quality service in Metro Vancouver. MOCA alleviates the stress and hassle that was recognized when people need to repair their cars."/>
    <meta name="keywords" content="cars,auto body,Vancouver,Surrey,Burnaby,Richmond">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <link href="{{ URL::asset('http://vjs.zencdn.net/5.11.8/video-js.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('https://use.fontawesome.com/0cbd855dec.js') }}"></script>
    <script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
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
                <li class="navoptions" ><a href="/#title2">Get Free Quotes</a></li>
                <li class="navoptions"><a href="#footer">Contact</a></li>
                <li class="navoptions"><a href="{{ URL::asset('https://www.facebook.com/mocaestimator/?fref=ts') }}"><img src="{{ URL::asset('image/fbbtn.png') }}" alt="Facebook Icon"></a></li>
                <li class="navoptions"><a href="{{ URL::asset('https://plus.google.com/114693879745430004744') }}"><img src="{{ URL::asset('image/glebtn.png') }}" alt="Google Plus Icon"></a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper">
    <header class="intro-header" style="background-image: url('{{ URL::asset('css/slider_1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>MOCA Blog</h1>
                        <hr class="small">
                        <!--                         <span class="subheading">A Clean Blog Theme by Start Bootstrap</span> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <hr class="orangeline">
    <div id="currentblog">
    @foreach ($blog as $blogPost) {{--inital object holding collection in array passed--}}
        @foreach($blogPost as $blogEntry) {{--each entry in collection--}}
            @if($blogEntry['text_body1'] != null)
            <div class="row blog"> <!--css from styles.css-->
                <div class="col-md-3">
                </div>
                <div class="col-md-6 vertical-center-row"> <!--css from styles.css-->
                    <h1>{{ $blogEntry['title'] }}</h1>
                    {{ $blogEntry['text_body1'] }}
                    {!! '<img src="data:image/jpeg;base64,'.base64_encode( $blogEntry['pic1'] ).'"/>' !!}
                </div>
                <div class="col-md-3">
                </div>
                <br><br>
            </div>
            @endif
            @if($blogEntry['text_body2'] != null)
            <div class="row blog">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 vertical-center-row">
                    {{ $blogEntry['text_body2'] }}
                    {!! '<img src="data:image/jpeg;base64,'.base64_encode( $blogEntry['pic2'] ).'"/>' !!}
                </div>
                <div class="col-md-3">
                </div>
                <br><br>
            </div>
            @endif
            @if($blogEntry['text_body3'] != null)
            <div class="row blog">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 vertical-center-row">
                    {{ $blogEntry['text_body3'] }}
                    {!! '<img src="data:image/jpeg;base64,'.base64_encode( $blogEntry['pic3'] ).'"/>' !!}
                </div>
                <div class="col-md-3">
                </div>
                <br><br>
            </div>
            @endif
            @if($blogEntry['text_body4'] != null)
            <div class="row blog">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 vertical-center-row">
                    {{ $blogEntry['text_body4'] }}
                    {!! '<img src="data:image/jpeg;base64,'.base64_encode( $blogEntry['pic4'] ).'"/>' !!}
                </div>
                <div class="col-md-3">
                </div>
                <br><br>
            </div>
            @endif
            @if($blogEntry['text_body5'] != null)
            <div class="row blog">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 vertical-center-row">
                    {{ $blogEntry['text_body5'] }}
                    {!! '<img src="data:image/jpeg;base64,'.base64_encode( $blogEntry['pic5'] ).'"/>' !!}
                </div>
                <div class="col-md-3">
                </div>
                <br><br>
            </div>
            @endif
            @if($blogEntry['text_body6'] != null)
            <div class="row blog">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 vertical-center-row">
                    {{ $blogEntry['text_body6'] }}
                    {!! '<img src="data:image/jpeg;base64,'.base64_encode( $blogEntry['pic6'] ).'"/>' !!}
                </div>
                <div class="col-md-3">
                </div>
                <br><br>
            </div>
            @endif
            @if($blogEntry['text_body7'] != null)
            <div class="row blog">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 vertical-center-row">
                    {{ $blogEntry['text_body7'] }}
                    {!! '<img src="data:image/jpeg;base64,'.base64_encode( $blogEntry['pic7'] ).'"/>' !!}
                </div>
                <div class="col-md-3">
                </div>
                <br><br>
            </div>
            @endif
            @if($blogEntry['text_body8'] != null)
            <div class="row blog">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 vertical-center-row">
                    {{ $blogEntry['text_body8'] }}
                    {!! '<img src="data:image/jpeg;base64,'.base64_encode( $blogEntry['pic8'] ).'"/>' !!}
                </div>
                <div class="col-md-3">
                </div>
                <br><br>
            </div>
            @endif
            @if($blogEntry['text_body9'] != null)
            <div class="row blog">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 vertical-center-row">
                    {{ $blogEntry['text_body9'] }}
                    {!! '<img src="data:image/jpeg;base64,'.base64_encode( $blogEntry['pic9'] ).'"/>' !!}
                </div>
                <div class="col-md-3">
                </div>
                <br><br>
            </div>
            @endif
            @if($blogEntry['text_body10'] != null)
            <div class="row blog">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 vertical-center-row">
                    {{ $blogEntry['text_body10'] }}
                    {!! '<img src="data:image/jpeg;base64,'.base64_encode( $blogEntry['pic10'] ).'"/>' !!}
                </div>
                <div class="col-md-3">
                </div>
            </div>
            @endif
        @endforeach
    <br><br>
    @endforeach
    </div>

    {{--<div id="currentblog">
        <img src="{{ URL::asset('css/slider_3.jpg') }}">
    </div>--}}

    <div id="blogsocialmedia" class="row">
        <div class="col-md-4 col-md-offset-5">
            <a href="{{ URL::asset('https://www.facebook.com/mocaestimator/?fref=ts') }}">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span>
            </a>
            <a href="{{ URL::asset('https://plus.google.com/114693879745430004744') }}">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-google-plus-official fa-stack-1x fa-inverse"></i>
            </span>
            </a>
            <a href="{{ URL::asset('https://plus.google.com/114693879745430004744') }}">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
            </a>
            <a href="{{ URL::asset('https://plus.google.com/114693879745430004744') }}">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
            </span>
            </a>
        </div>
        <div class="col-md-1 col-md-offset-5">
            <a href="#blogsocialmedia">
            <span>
            <h1 id="share">Share</h1>
            </span>
            </a>
        </div>
    </div>

    {{--<div class="row">
        <div class="col-md-2">
            <form>
                <input class="sb-search-input" placeholder="User Name" type="text" value="" name="search" id="search">
            </form>
        </div>
        <div class="col-md-2">
            <form>
                <input class="sb-search-input" placeholder="Password" type="text" value="" name="search" id="search">
            </form>
        </div>
    </div>--}}

    <hr class="orangeline">

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
            <a href="{{ URL::asset('https://www.facebook.com/mocaestimator/?fref=ts') }}">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span>
            </a>
            <a href="{{ URL::asset('https://plus.google.com/114693879745430004744') }}">
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
</body>
</html>
