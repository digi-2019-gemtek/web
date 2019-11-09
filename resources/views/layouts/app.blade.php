<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif
        {{ config('app.name', Lang::get('titles.app')) }}</title>
    <meta name="description" content="">
    <meta name="author" content="Jerry Yang">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done">
    @include('partials.nav')
    <div class="app-body">
        @include('partials.sidebar')



        <main class="main">
            <div class="row">
                <div class="col-12">
                    @include('partials.form-status')
                </div>
            </div>
            @yield('content')
        </main>




    </div>

    {{-- Scripts --}}
    <script src="{{ asset('/js/app.js') }}"></script>

    @yield('footer_scripts')

</body>

</html>