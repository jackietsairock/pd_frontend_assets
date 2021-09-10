<html>
    <head>
        <title>進度條 Laravel 課程範例</title>
        @include('layouts.meta')
        @include('layouts.css')
        <link rel="stylesheet" type="text/css" href="/css/app.css"/>
    </head>
    <body>
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
        @include('layouts.js')

        @section('inline_js')
        @show
    </body>
</html>
