<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="//cdn.jsdelivr.net/npm/intl-tel-input@16.0.3/build/css/intlTelInput.css" rel="stylesheet" >
        <link href="{{ asset('assets/styles/styles.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{url('css/_icons.css')}}">
        <script src="//cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = { 
                darkMode: 'class',
                blocklist: [
                    'collapse',
                ],
            }
        </script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="/css/main.css"/>

        @stack('css')

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>

    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"
            crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>


    <script src="{{ asset('/assets/jquery/jquery.min.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>

    {{--todo - which one we using?--}}
    {{--<script src="//cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>--}}
    {{--<script src="//cdn.jsdelivr.net/npm/intl-tel-input@16.0.3/build/js/intlTelInput.js"></script>--}}

    <script src="{{ asset('/assets/vuejs/vue.global.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src='//cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>


    {{--todo - inputmask are conflicting, can only include one--}}
    {{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" ></script>--}}

    <script src="{{ asset('/assets/plugins/phone-masking/inputmask.js') }}"></script>
    
    @stack('js')

</html>
