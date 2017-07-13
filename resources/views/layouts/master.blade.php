<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Portfolio of Jundy Cosmod</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


        <!-- Custom fonts for this template -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="portfolio/css/app.css" rel="stylesheet">

        <!-- Temporary navbar container fix -->
        <style>
            .navbar-toggler {
                z-index: 1;
            }

            @media (max-width: 576px) {
                nav > .container {
                    width: 100%;
                }
            }
        </style>

    </head>

    <body id="page-top">
        @include ('layouts.nav')


        @include ('layouts.header')

        @if( $flash = session('message') )
        <div id="flash-message" class="alert alert-success" role="alert">
            {{ $flash }}
        </div>
        @endif

        @include ('layouts.services')

        @include ('layouts.portfolio')

        @include ('layouts.about')

        @include ('layouts.team')

        @include ('layouts.clients')

        @include ('layouts.contact')

        @include ('layouts.footer')

        @include ('layouts.modals')



        <!-- Bootstrap core JavaScript -->

        <script src="portfolio/vendor/jquery/jquery.min.js"></script>
        <script src="portfolio/vendor/tether/tether.min.js"></script>
        <script src="portfolio/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="portfolio/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Contact form JavaScript -->
        <script src="portfolio/js/jqBootstrapValidation.js"></script>
        <script src="portfolio/js/contact_me.js"></script>

        <!-- Custom scripts for this template -->
        <script src="portfolio/js/agency.min.js"></script>

        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        <script>
            // JavaScript
            window.sr = ScrollReveal({duration: 2000});
            sr.reveal('#services');
            sr.reveal('.col-md-4', 500);
        </script>
        <script src="portfolio/js/typed/typed.min.js"></script>
        <script>
            var typed3 = new Typed('.typed', {
                strings: ['web apps.', 'web designs.', 'websites.', 'back-end apps.'],
                typeSpeed: 200,
                backSpeed: 100,
                smartBackspace: true, // this is a default
                loop: true
            });

        </script>
        <style>

            .typed-cursor{
                opacity: 1;
                animation: typedjsBlink 0.7s infinite;
                -webkit-animation: typedjsBlink 0.7s infinite;
                animation: typedjsBlink 0.7s infinite;
            }
            @keyframes typedjsBlink{
                50% { opacity: 0.0; }
            }
            @-webkit-keyframes typedjsBlink{
                0% { opacity: 1; }
                50% { opacity: 0.0; }
                100% { opacity: 1; }
            }

            .typed-fade-out{
                opacity: 0;
                transition: opacity .25s;
                -webkit-animation: 0;
                animation: 0;
            }

        </style>
    </body>

</html>
