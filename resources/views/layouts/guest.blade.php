@include('layouts.header')

<body>
    {{-- navbar --}}
    @section('navbar')
        @include('layouts.navbar')
    @show
    {{-- content --}}
    @yield('content')
    {{-- footer --}}
    @section('footer')
        @include('layouts.footer')
    @show

    {{-- js --}}
    {{-- <script src="{{ asset('js/main.js') }}" async="async"></script> --}}
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" async="async"></script>
    <script src="{{ asset('js/main.js') }}" async="async"></script>
    {{-- css --}}

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
</body>
