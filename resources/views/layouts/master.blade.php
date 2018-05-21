<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ProDocument</title>
        <link rel="icon" href="{{ asset('/image/support_logo.ico') }}">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Styles -->
        <link href="{{ asset('/css/layouts.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/home.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/auth.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/index.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/show.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/player.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/sphere_grid.css') }}" rel="stylesheet" type="text/css">

        <!-- JS Scripts -->
        <script src="{{ asset('/js/debounce.min.js') }}"></script>
        <script src="{{ asset('/js/smoothscroll.js') }}"></script>
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>


    </head>
    <body>

      @include('layouts.sidenav')

      <div class="main">
        <p>
          @yield('content')
        </p>
      </div>

    </body>
</html>
