<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>F&F @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheets  -->
    <link rel="stylesheet" href="{{ asset('css/main_new.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontAwesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

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
    <script type="text/javascript">

        function add_message(data){
            console.log("added message")
            var tpl = $('#message-template').clone();
            tpl.attr('hidden',false)
            tpl.find('#tpl-name').text(data.message_name);
            tpl.find('#tpl-time').text(data.timestamp);
            tpl.find('#tpl-from').text(data.message_from);
            tpl.find('#tpl-message').text(data.message_data);
            tpl.insertBefore('.testimonial-item:first')
        }

        $(document).ready(function() {

            // $('body').addClass('stop-scrolling')
            // navigation click actions 
            $('.scroll-link').on('click', function(event) {
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function(event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });

            $("#rsvp").submit(function(event){
                var formData = {
                    _token: "{{ csrf_token() }}",
                    name: "{{ $name }}",
                    rsvp_join: $('input[name="rsvp_join"]:checked').val(),
                    rsvp_count: $("#rsvp_count").val(),
                    rsvp_reason: $("#rsvp_reason").val(),
                };

                $.ajax({
                    type: "POST",
                    url: "/save-rsvp",
                    data: formData,
                    dataType: "json",
                    encoded: true,
                }).done(function(res){
                    if(res.status == 'Success'){
                        console.log('Success')
                        $("#modal-opened").toggle()
                    }
                    else{
                        console.log('Error')
                    }
                });

                event.preventDefault();
            })

            $('.rsvp-close').click(function(){
                $("#modal-opened").toggle()
            })

            $('.message-close').click(function(){
                $("#modal-opened-2").toggle()
            })

            $("#message").submit(function(event){
                var formData = {
                    _token: "{{ csrf_token() }}",
                    name: "{{ $name }}",
                    message_name: $("#message_name").val(),
                    message_from: $("#message_from").val(),
                    message_data: $("#message_data").val(),
                };

                $.ajax({
                    type: "POST",
                    url: "/save-message",
                    data: formData,
                    dataType: "json",
                    encoded: true,
                }).done(function(res){
                    console.log(res);
                    if(res.status == 'Success'){
                        data = res.data;
                        if(data.message_name !== null && data.message_from !== null){
                            add_message(data);
                        }
                        $("#modal-opened-2").toggle()
                    }
                    else{
                        console.log('Error')
                    }
                });

                event.preventDefault();
            })
        });
        // scroll function
        function scrollToID(id, speed) {
            var offSet = 50;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({
                scrollTop: targetOffset
            }, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() {}
            };
        }
    </script>
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
