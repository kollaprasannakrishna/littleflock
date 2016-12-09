<!DOCTYPE html>
<html lang="en">
<head>
    @include('stylesAndJs.header')
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
    <div class="body header-style2">
        <header class="site-header">
            @include('partials._head')
            @include('partials._nav')
        </header>

    @yield('content')

    @include('partials._footer')
    </div>


    @include('stylesAndJs.footer')
</body>
</html>
