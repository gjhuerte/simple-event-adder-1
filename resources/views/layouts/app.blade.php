<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet" />

        <script src="{{ secure_asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="bg-dark flex-center position-ref full-height">
            @include('layouts.navbar')

            <div 
                id="app"
                class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
