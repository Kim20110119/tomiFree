<!DOCTYPE html>
<html class="no-js" lang="ja">
    <head>
        @yield('head')
        @yield('page_css')
    </head>
    <body id="pagetop">
        @yield('content')
        @yield('footer')
        @yield('javascript')
        @yield('common_js')
        @yield('page_js')

    </body>
</html>