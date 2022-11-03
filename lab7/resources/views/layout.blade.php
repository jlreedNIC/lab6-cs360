<!DOCTYPE HTML>
<html>
    <head>
        <title>513 Studios - @yield('title')</title>
        @include('layouts.stylesheet')
        @yield('styles')
    </head>
    <body>
        @include('layouts.navbar')

        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                        @include('layouts.header')

                        <section id="main content">
                        @yield('content')
                        </section>

                    

                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </body>
</html>