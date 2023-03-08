<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('img/youlogo.png') }}">
    <title>@yield('title') </title>

    @include('includes.masyarakat.style')
</head>

<body>
    @include('includes.masyarakat.navbar')

    <main>
        @yield('content')
    </main>

    @include('includes.masyarakat.footer')
    @include('sweetalert::alert')
    @include('includes.masyarakat.script')
</body>

</html>
