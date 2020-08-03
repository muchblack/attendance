@extends('layouts.header')
    <body class="sb-nav-fixed">
    @include('layouts.topnav')
        <div id="layoutSidenav">
            @include('layouts.slider')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </main>
                @include('layouts.footer')
            </div>
        </div>
    </body>
</html>
