<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> @yield('title') </title>
   @include('website.includes.style')
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>


<header class="header navbar-area">

    @include('website.includes.header')

</header>

    @yield('body')

<footer class="footer">

    @include('website.includes.footer')

</footer>


<a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
</a>


@include('website.includes.script')
</body>

</html>
