<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    {{-- navbar --}}
    @include('partials.dashboard-navbar')

    {{-- sidebar --}}
    @include('partials.sidebar.admin-sidebar')

    {{-- main --}}
    <div class="p-4 sm:ml-64">
        <div class="container">
            @yield('container')
        </div>
     </div>
</body>
</html>
