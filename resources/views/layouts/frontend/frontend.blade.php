<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="icon" href="{{ asset('img/xfav-icon.png.pagespeed.ic.HgrwFVAOb4.png') }}" type="image/x-icon">

<title>KAJ BANGLA EMPLOYMENT SERVICE</title>

<link href="{{ asset('kajWebDevs.css') }} " rel="stylesheet">



<link href="{{ asset('css/KBweb_main.css') }}" rel="stylesheet">
<link href="{{ asset('package/cute-alert/style.css') }}" rel="stylesheet">
<link href="{{ asset('multiple_select/jquery.multiselect.css') }}" rel="stylesheet">

<script type="text/javascript" src="{{ asset('package/cute-alert/cute-alert.js') }}"></script>



<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<style type="text/css">
  .styled-table thead tr {
    background-color: ;
    color: black;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    border-bottom: 2px black solid;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
</style>
<body>

<header class="main_header_area">
<div class="header_top_area">
<div class="container">
<div class="pull-left">
<a href="#" class="pull_a"><i class="fa fa-phone"></i>(+880)1711-150951</a>
<a href="#" class="pull_a"><i class="fa fa-map-marker"></i>House- 95 Biruttom Ziaur Rahman Sarak, Kakoli</a>

<div class="dropdown">
  <button class="dropbtn">Language</button>
  <div class="dropdown-content">
    {{-- <a href="#">বাংলা</a> --}}
    <a href="#">English</a>
    
  </div>
</div>
<div class="dropdown">
  <a href="{{ route('passport_tracker') }}" class="dropbtn passtrack" style="background-color: #5b7bbd;">TRACK PASSPORT</a>
</div>
<div class="dropdown">
  <a href="{{ route('passport_complain') }}" class="dropbtn passtrack" style="background-color: #CB504D;color: white;">POST COMPLAIN</a>
</div>

</div>
<div class="pull-right">
<ul class="header_social">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="main_menu_area">
<div class="container">
<nav class="navbar navbar-default">

<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="{{ route('home') }}"><img width="100%" height="100%" src="{{ asset(logo('KAJ BANGLA')) }}" alt=""></a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
<li class="{{ request()->is('/') ? 'active' : ''}}"><a href="{{ route('home') }}">Home</a></li>
{{-- <li class="dropdown submenu">
<a href="{{ route('clients') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CLients</a>
<ul class="dropdown-menu">
<li class="{{ request()->is('clients') ? 'active' : ''}}"><a href="{{ route('clients') }}">Our Clients</a></li>
<li><a href="{{ route('single_clients') }}">Single Clients</a></li>
</ul>
</li> --}}
<li class="dropdown submenu">
<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product & Services</a>
<ul class="dropdown-menu">
<li><a href="{{ route('services') }}">Our Products & Services</a></li>
<li><a href="{{ route('female_workers') }}">Femlae workers</a></li>
{{-- <li><a href="{{ route('single_service') }}">Single Product</a></li> --}}
</ul>
</li>
<li class="dropdown submenu">
<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Local Service</a>
<ul class="dropdown-menu">
<li><a href="{{ route('kbc') }}">KB CONSULTANCY</a></li>
{{-- <li><a href="{{ route('single_service') }}">Single Product</a></li> --}}
</ul>
</li>
<li class="dropdown submenu">
<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">representative</a>
<ul class="dropdown-menu">
<li><a href="{{ route('rep_japan') }}">Japan</a></li>
{{-- <li><a href="{{ route('single_service') }}">Single Product</a></li> --}}
</ul>
</li>

<li class="{{ request()->is('about') ? 'active' : ''}}"><a href="{{ route('about') }}">About Us</a></li>
<li class="{{ request()->is('contact') ? 'active' : ''}}"><a href="{{ route('contact') }}">Contact</a></li>
<li class="dropdown submenu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Others</a>
<ul class="dropdown-menu">
<li><a href="{{ route('certificates') }}">Certificates/Accreditation</a></li>
<li><a href="{{ route('gallery') }}">Gallery</a></li>
<li><a href="{{ route('social_activity') }}">Social Activities</a></li>
<li><a href="{{ route('passport_tracker') }}">Track Passport</a></li>
<li><a href="{{ route('passport_complain') }}">Post Complain</a></li>
{{-- <li><a href="{{ route('news_blogs') }}">News & Blog</a></li>
<li><a href="{{ route('circular') }}">Circular</a></li>
<li><a href="{{ route('career') }}">Career</a></li> --}}
</ul>
</li>


</ul>
</div>
</nav>
</div>
</div>
</header>
  @yield('frontend')
 <footer class="footer_area">
<div class="footer_widgets_area">
<div class="container">
<div class="row footer_widgets_inner">
<div class="col-md-4 col-sm-4">
<aside class="f_widget about_widget">
<img width="100%" height="100%" src="{{ asset(logo('TOKYO BANGLA')) }}" alt="">
<p>Kaj Bangla Employment Service is one of the leading Governments approved Manpower Agencies having License No.1345 in Bangladesh registered under the Ministry of Expatriates' Welfare & Overseas Employment which facilitates professionally managed outflow of work force from Bangladesh to abroad</p>
<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#"><i class="fa fa-pinterest"></i></a></li>

</ul>
</aside>
</div>

<div class="col-md-3 col-sm-3">
<aside class="f_widget address_widget">
<div class="f_w_title">
<h3>Office Address</h3>
</div>
<div class="address_w_inner">
<div class="media">
<div class="media-left">
<i class="fa fa-map-marker"></i>
</div>
<div class="media-body">
<p>House- 95 Biruttom Ziaur Rahman Sarak, Kakoli, Dhaka 1213</p>
</div>
</div>
<div class="media">
<div class="media-left">
<i class="fa fa-phone"></i>
</div>
<div class="media-body">
<p>(+880)1711-150951 </p>
<p>(+880)1711-150951 </p>
</div>
</div>
<div class="media">
<div class="media-left">
<i class="fa fa-envelope"></i>
</div>
<div class="media-body">
<p><a href="/#" class="__cf_email__" data-cfemail="177e7971785773787a767e793974787a">info@kajbangla.org</a></p>
</div>

</div>

</div>

</aside>

</div>
<div class="col-md-3 col-sm-3">
<aside class="f_widget give_us_widget">
<h5>Give Us A Call</h5>
<h4>  
(+880)1711-150951</h4>
<br>
<h5>SCAN</h5>
<br>
<img height="60%" style="border: 3px green solid" width="60%" src="{{ asset('upload_frontend/QR/kajBangla.png') }}">
</aside>
</div>
<div class="col-md-1 col-sm-1">
<aside class="f_widget give_us_widget">
  <br>
<a href="{{ route('passport_complain') }}" class="dropbtn passtrack" style="background-color: #CB504D;color: white;">POST COMPLAIN</a>


<br>
<br>
  <a href="{{ route('passport_tracker') }}" class="dropbtn passtrack" style="background-color: #5b7bbd;">TRACK PASSPORT</a>
  
</aside>
</div>
</div>
</div>
</div>
<div class="footer_copy_right">
<div class="container">
<h4>
Copyright &copy;{{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}<script>document.write(new Date().getFullYear());</script> All rights reserved | KAJBANGLA IT DIVISION
</h4>
</div>
</div>
</footer>


<script src="{{ asset('js/jquery-2.2.4.js') }} "></script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('multiple_select/jquery.multiselect.js') }}"></script>
<script type="text/javascript">
$('.multi').multiselect({
    /* OPTIONS */
});
</script>
<script src="{{ asset('vendors/revolution/js/jquery.themepunch.tools.min.js') }} "></script>
<script src="{{ asset('vendors/revolution/js/jquery.themepunch.revolution.min.js') }} "></script>
<script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.video.min.js') }} "></script>
<script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js%20revolution.extension.layeranimation.min.js.pagespeed.jc.ZTonf6DzyL.js') }} "></script><script>eval(mod_pagespeed_I99NN3N8iH);</script>
<script type="text/javascript">
  function ShowImg(img)
    {
        $('#myModal').modal('show');
        $('#showImg').attr("src", img);
    }
</script>
<script>eval(mod_pagespeed_MGuHDr4hWO);</script>
<script src="{{ asset('vendors/revolution%2C_js%2C_extensions%2C_revolution.extension.navigation.min.js%20owl-carousel%2C_owl.carousel.min.js%20isotope%2C_imagesloaded.pkgd.min.js.pagespeed.jc.O1eq7gCJm9.js') }} "></script><script>eval(mod_pagespeed_H6RBBxvynO);</script>
<script>eval(mod_pagespeed_7cdM6$D4D4);</script>
<script>eval(mod_pagespeed_GYsspKcGOb);</script>
<script src="{{ asset('vendors/isotope%2C_isotope.pkgd.min.js%20magnific-popup%2C_jquery.magnific-popup.min.js%20counterup%2C_waypoints.min.js%20counterup%2C_jquery.counterup.min.js%20flex-slider%2C_jquery.flexslider-min.js.pagespe.js') }} "></script>
<script>eval(mod_pagespeed_1c7pDIzD0k);</script>
<script>eval(mod_pagespeed_mp4TfCSL7z);</script>
<script>eval(mod_pagespeed_LmM3mTALsS);</script>
<script>eval(mod_pagespeed_pXyk3qR5iK);</script>
<script>eval(mod_pagespeed_0iqkF9K506);</script>

{{-- <script src="{{ asset('../../maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE') }} "></script> --}}
{{-- <script src="{{ asset(' js/gmaps.min.js') }}"></script> --}}
<script src="{{ asset('js/theme.js') }} "></script>

{{-- <script async="" src="{{ asset('../../gtag/js?id=UA-23581568-13') }} "></script> --}}
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
{{-- <script defer="" src="{{ asset('../../beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194') }} " integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6d526c35cfbd18b6","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script> --}}
</body>
</html>