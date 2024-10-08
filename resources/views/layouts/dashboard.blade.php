<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="/css/skeleton.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <title>Document</title>
    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    {{-- navbar --}}
    @include('partials.dashboard-navbar')

    {{-- sidebar --}}
    @switch(auth()->user()->occupation)
        @case('super-admin')
            @include('partials.sidebar.admin-sidebar')
            @break
        @case('partner')
            @include('partials.sidebar.partner-sidebar')
            @break
        @case('job-sekker')
            @include('partials.sidebar.job-seeker-sidebar')
            @break
        @default

    @endswitch

    {{-- main --}}
    <div class="p-4 sm:ml-64 bg-slate-100 h-screen">
        <div class="container mt-14">
            @yield('container')
        </div>
     </div>

     @stack('scripts')
     <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>

    @yield('scripts')
</body>
</html>
