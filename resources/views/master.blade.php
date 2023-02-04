<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>F&F @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <meta property="og:image" content="{{ asset('images/favicon.ico') }}" />
    <meta property="og:url" content="https://ffforever.fun/" />
    <meta property="og:title" content="F&F Wedding Invitation" />

    <!-- Fonts  -->
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/fontawesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheets  -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Vendor  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.css') }}">

    <!-- Scripts  -->
    <script src="{{ asset('vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

    @yield('custom_style')
</head>

<body>
    @yield('content')

    <!-- Scripts  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="{{ asset('vendor/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
   
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('vendor/countdowntime/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/countdowntime/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('vendor/countdowntime/moment-timezone-with-data.min.js') }}"></script>
    <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
    <script>
        $('.cd100').countdown100({
            /*Set Endtime here*/
            /*Endtime must be > current time*/
            endtimeYear: 2023,
            endtimeMonth: 2,
            endtimeDate: 11,
            endtimeHours: 7,
            endtimeMinutes: 0,
            endtimeSeconds: 0,
            timeZone: "Asia/Jakarta"
            // ex:  timeZone: "America/New_York"
            //go to " http://momentjs.com/timezone/ " to get timezone
        });
    </script>

    <script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="{{ asset('js/under-construction/main.js') }} "></script>

    @yield('custom_script')
</body>

</html>
