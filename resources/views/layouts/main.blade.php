<!doctype html>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


    <script src="{{ asset('assets/flowbite/js/flowbite.min.js') }}"></script>
</head>

<body class="font-poppins">

    {{-- Including Navbar and Sidebar --}}
    @include('.partials.navbar')
    @include('.partials.sidebar')
    {{-- Including Content of pages --}}
    <div class="ml-[286px]">
        @yield('pages')
    </div>
    {{-- Including Javascript from the pages (If Any) --}}
    @yield('scripts')
</body>
