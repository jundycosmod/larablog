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
        <link href="/portfolio/css/app.css" rel="stylesheet">

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
        
        @if( $flash = session('message') )
        <div id="flash-message" class="alert alert-success" role="alert">
            {{ $flash }}
        </div>
        @endif
        
        @yield ('content')

        @include ('layouts.errors')

        <!-- Bootstrap core JavaScript -->

        <script src="/portfolio/vendor/jquery/jquery.min.js"></script>
        <script src="/portfolio/vendor/tether/tether.min.js"></script>
        <script src="/portfolio/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="/portfolio/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Contact form JavaScript -->
        <script src="/portfolio/js/jqBootstrapValidation.js"></script>
        <script src="/portfolio/js/contact_me.js"></script>

        <!-- Custom scripts for this template -->
        <script src="/portfolio/js/agency.min.js"></script>

        </body>

</html>
