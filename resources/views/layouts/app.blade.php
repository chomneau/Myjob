<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Job') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Abel|Anton|Squada+One" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=7g5tyr05gk117hrd91y4rj4pw1hxwsr75y5gvypori9or5la"></script>

    <script>
        tinymce.init({ selector:'textarea',
            plugins: "link",
            menu: 'disable',
            plugins: "lists",

        });

    </script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themestyle.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{URL::asset('assets/js/action.js')}}"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">








</head>
{{--  #E2EBEF--}}
<body style="background-color: #F8F4F4 ">
        {{--@include('inc.navbar')--}}
   @include('inc.navbar')

    @yield('content')



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('inc.footer')
</body>
</html>
