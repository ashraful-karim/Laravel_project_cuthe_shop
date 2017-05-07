<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/lib/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/lib/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/lib/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/lib/jquery.bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/lib/owl.carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/lib/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/assets/css/responsive.css')}}" />
    
    <title>Kute shop - themelot.net</title>
</head>
<body class="home">
<!-- TOP BANNER -->
<!--<div id="top-banner" class="top-banner">
    <div class="bg-overlay"></div>
    <div class="container">
        <h1>Special Offer!</h1>
        <h2>Additional 40% OFF For Men & Women Clothings</h2>
        <span>This offer is for online only 7PM to middnight ends in 30th July 2015</span>
        <span class="btn-close"></span>
    </div>
</div>-->
<!-- HEADER -->
@yield('header')
<!-- end header -->
<!-- Home slideder-->

@yield('slider')


<!-- END Home slideder-->
<!-- servives -->

@yield('content')

@yield('fashion')

@yield('sports')

@yield('electronics')

@yield('furniture')

@yield('jewelery')



@yield('showcase')


@yield('hot_categories')


<!-- Footer -->
@yield('footer')

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="{{URL::to('public/assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/lib/select2/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/lib/jquery.bxslider/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/lib/owl.carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/lib/jquery.countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/js/jquery.actual.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/assets/js/theme-script.js')}}"></script>

</body>
</html>