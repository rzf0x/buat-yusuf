<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Aplikasi Pengaduan Masyarakat</title>

    <link rel="stylesheet" crossorigin href="{{ asset('dist/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dist/assets/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" crossorigin href="{{ asset('dist/assets/compiled/css/iconly.css') }}">
</head>x

<body>
    <script src="{{ asset('dist/assets/static/js/initTheme.js') }}"></script>
    <div id="app">

        {{-- Sidebar --}}
        @include('layouts.partials.sidebar')

        <div id="main">

            {{-- Navbar --}}
            @include('layouts.partials.navbar')

            <div class="page-heading">
                <h3>{{ $title }}</h3>
            </div>

            <div class="page-content">

                @yield('content')

            </div>

            {{-- Footer --}}
            @include('layouts.partials.footer')

        </div>
    </div>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="assets/compiled/js/app.js"></script>



    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/static/js/pages/dashboard.js"></script>

</body>

</html>
