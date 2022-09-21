<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | DC Comics</title>
    {{-- IMPORT CSS/ JAVA --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script defer src="{{ asset('js/app.js') }}"></script>


</head>

<body>

    {{-- HEADER --}}
    @include('includes.header')
    {{-- JUMBO --}}
    @include('includes.jumbo')

    <main>
        @yield('main-content')


    </main>


    {{-- FOOTER --}}
    @include('includes.footer')

    @include('includes.contacts')

</body>

</html>
