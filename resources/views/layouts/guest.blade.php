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
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" async="async"></script>
    <script src="{{ asset('js/cookies.js') }}" async="async"></script>
  

    <x-cookie-banner />
</body>
