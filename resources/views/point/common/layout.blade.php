<!DOCTYPE html>
<html class="no-js" lang="ja">
    <head>
        @yield('head')
        @yield('page_css')
    </head>
    <body id="top">
        <div id="wrapper">
            @yield('header')
            @yield('navigation')
            @yield('content')
            @yield('side')
        </div>
        <div id="wrapper">
            @yield('footer')
        </div>
        @yield('javascript')
        @yield('common_js')
        @yield('page_js')
    </body>
</html>