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
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <script>
            // JavaScript
            window.sr = ScrollReveal({duration: 2000});
            sr.reveal('#services');
            sr.reveal('#portfolio');
            sr.reveal('#about');
            //sr.reveal('#team');
            sr.reveal('#clients');
            sr.reveal('#contact');
            sr.reveal('.col-md-4', 500);
            sr.reveal('.timeline > li', 500);
            sr.reveal('.col-md-3', 500);
            
            $( document ).ready(function() {

                $(window).scroll(function () {
                    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                        $('#return-to-top').fadeIn(200);    // Fade in the arrow
                    } else {
                        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
                    }
                });
                $('#return-to-top').click(function () {      // When arrow is clicked
                    $('body,html').animate({
                        scrollTop: 0                       // Scroll to top of body
                    }, 500);
                });
            });
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
            
            #return-to-top {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background: rgb(0, 0, 0);
                background: rgba(0, 0, 0, 0.7);
                width: 50px;
                height: 50px;
                display: block;
                text-decoration: none;
                -webkit-border-radius: 35px;
                -moz-border-radius: 35px;
                border-radius: 35px;
                display: none;
                -webkit-transition: all 0.3s linear;
                -moz-transition: all 0.3s ease;
                -ms-transition: all 0.3s ease;
                -o-transition: all 0.3s ease;
                transition: all 0.3s ease;
            }
            #return-to-top i {
                color: #fff;
                margin: 0;
                position: relative;
                left: 16px;
                top: 13px;
                font-size: 19px;
                -webkit-transition: all 0.3s ease;
                -moz-transition: all 0.3s ease;
                -ms-transition: all 0.3s ease;
                -o-transition: all 0.3s ease;
                transition: all 0.3s ease;
            }
            #return-to-top:hover {
                background: rgba(0, 0, 0, 0.9);
            }
            #return-to-top:hover i {
                color: #fff;
                top: 5px;
            }

        </style>
        <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
    </body>

</html>
