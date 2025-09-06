
<body>
    @include('layouts.header')
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

    <x-cookie-banner />

    {{-- js --}}
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js" defer></script>
    <script src="{{ asset('js/main.min.js') }}" defer></script>
    <script src="{{ asset('js/cookies.min.js') }}" defer></script>


</body>
