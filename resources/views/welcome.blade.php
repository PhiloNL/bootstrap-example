<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('vendor/wire-elements-pro/css/bootstrap-overlay-component.css') }}">

        @vite(['resources/js/app.js'])
        @livewireStyles
        @powerGridStyles
    </head>
    <body class="antialiased">

{{--    <button onclick="Livewire.emit('modal.open', 'users-overview');">Open Overview</button>--}}

    <livewire:user-table/>

        <!-- Require the Modal Pro component -->
        @livewire('modal-pro')

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>

        @livewireScripts
        @powerGridScripts

        <script src="{{ asset('vendor/wire-elements-pro/js/overlay-component.js') }}"></script>
    </body>
</html>
