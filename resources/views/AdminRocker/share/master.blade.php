<!doctype html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('AdminRocker.share.css')
    @yield('css')
</head>

<body>
    <div class="wrapper">
        <div class="header-wrapper">
            <header>
                @include('AdminRocker.share.header')
            </header>
            @include('AdminRocker.share.menu')
        </div>
        <div class="page-wrapper">
            <div class="page-content">
                @yield('noi_dung')
            </div>
        </div>
        <div class="overlay toggle-icon"></div>
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>

    @include('AdminRocker.share.js')
    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    @yield('js')
</body>

</html>
