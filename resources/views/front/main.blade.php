<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel Agency a Travel Agency Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Travel Agency Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- For Testimonials slider -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="all" />
    <!-- //For Testimonials slider -->
    <!-- //custom-theme files-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- //custom-theme files-->

    <!-- font-awesome-icons -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- googlefonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <!-- //googlefonts -->

</head>

<body>
    <script src="https://m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-98H8KRKT85');
    </script>

    <meta name="robots" content="noindex">

    <body>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- New toolbar-->
        <style>
            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            }


            #w3lDemoBar.w3l-demo-bar {
                top: 0;
                right: 0;
                bottom: 0;
                z-index: 9999;
                padding: 40px 5px;
                padding-top: 70px;
                margin-bottom: 70px;
                background: #0D1326;
                border-top-left-radius: 9px;
                border-bottom-left-radius: 9px;
            }

            #w3lDemoBar.w3l-demo-bar a {
                display: block;
                color: #e6ebff;
                text-decoration: none;
                line-height: 24px;
                opacity: .6;
                margin-bottom: 20px;
                text-align: center;
            }

            #w3lDemoBar.w3l-demo-bar span.w3l-icon {
                display: block;
            }

            #w3lDemoBar.w3l-demo-bar a:hover {
                opacity: 1;
            }

            #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
                color: #e6ebff;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons {
                margin-top: 30px;
                border-top: 1px solid #41414d;
                padding-top: 40px;
            }

            #w3lDemoBar.w3l-demo-bar .demo-btns {
                border-top: 1px solid #41414d;
                padding-top: 30px;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
                font-size: 26px;
            }

            #w3lDemoBar.w3l-demo-bar .no-margin-bottom {
                margin-bottom: 0;
            }

            .toggle-right-sidebar span {
                background: #0D1326;
                width: 50px;
                height: 50px;
                line-height: 50px;
                text-align: center;
                color: #e6ebff;
                border-radius: 50px;
                font-size: 26px;
                cursor: pointer;
                opacity: .5;
            }

            .pull-right {
                float: right;
                position: fixed;
                right: 0px;
                top: 70px;
                width: 90px;
                z-index: 99999;
                text-align: center;
            }

            /* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

            #right-sidebar {
                width: 90px;
                position: fixed;
                height: 100%;
                z-index: 1000;
                right: 0px;
                top: 0;
                margin-top: 60px;
                -webkit-transition: all .5s ease-in-out;
                -moz-transition: all .5s ease-in-out;
                -o-transition: all .5s ease-in-out;
                transition: all .5s ease-in-out;
                overflow-y: auto;
            }


            /* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

            .hide-right-bar-notifications {
                margin-right: -300px !important;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }



            @media (max-width: 992px) {
                #w3lDemoBar.w3l-demo-bar a.desktop-mode {
                    display: none;

                }
            }

            @media (max-width: 767px) {
                #w3lDemoBar.w3l-demo-bar a.tablet-mode {
                    display: none;

                }
            }

            @media (max-width: 568px) {
                #w3lDemoBar.w3l-demo-bar a.mobile-mode {
                    display: none;
                }

                #w3lDemoBar.w3l-demo-bar .responsive-icons {
                    margin-top: 0px;
                    border-top: none;
                    padding-top: 0px;
                }

                #right-sidebar,
                .pull-right {
                    width: 90px;
                }

                #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
                    margin-bottom: 0;
                }
            }
        </style>
        <div class="pull-right toggle-right-sidebar">
            <span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
        </div>



        <!-- banner -->


        <!-- Top-Bar -->
        <div class="top">
            <div class="container">


                <div class="col-md-6 top-middle">
                    <ul>
                        <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6 top-left">
                    <ul>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +021 365 777</li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> 132 New Lenox, 868 1st Avenue </li>
                    </ul>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
        <div class="top-bar">
            <div class="container">
                <div class="header">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header navbar-left">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h1><a class="navbar-brand" href="index.html">Travel Agency</span></a></h1>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                            <nav class="cl-effect-15" id="cl-effect-15">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="booking.html">Booking</a></li>
                                    <li><a href="{{ route('login') }}">login</a></li>
                                    <li><a href="{{ route('register') }}">register</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li class="dropdown">
                                        <a href="index.html#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="icons.html">Icons</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                            </nav>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- //Top-Bar -->



        <div>
            @yield('content')
        </div>


        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="col-md-4 agile_footer_grid">
                    <h3>Contact Info</h3>
                    <ul class="w3_address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                    </ul>
                </div>
                <div class="col-md-4 agile_footer_grid">
                    <h3>About Us</h3>
                    <p>Donec purus neque, vulputate id est id, pretium semper enim. Morbi viverra
                        congue nisi vel pulvinar posuere sapien eros, sed faucibus.</p>
                    <ul class="agileits_social_list">
                        <li><a href="index.html#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="index.html#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="index.html#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 agile_footer_grid">
                    <h3>Latest News</h3>
                    <ul class="agileits_w3layouts_footer_grid_list">
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <a href="index.html#" data-toggle="modal" data-target="#myModal">Donec purus neque, vulputate
                                id est id</a>
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <a href="index.html#" data-toggle="modal" data-target="#myModal">Nullam fringilla sed quam vitae</a>
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <a href="index.html#" data-toggle="modal" data-target="#myModal">Cras libero arcu, accumsan ac </a>
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <a href="index.html#" data-toggle="modal" data-target="#myModal">Aenean porttitor accumsan</a>
                        </li>
                        <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <a href="index.html#" data-toggle="modal" data-target="#myModal">Nullam sed turpis gravida</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <div class="w3_agileits_footer_grids">
                    <div class="col-md-12 wthree_footer_grid_right">
                        <h3>Sign up for our Newsletter</h3>
                        <form action="index.html#" method="post">
                            <input type="email" name="Email" placeholder="Enter your email..." required="">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="agileinfo_copyright">
            <p>© 2018 Travel Agency. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
        <!-- //footer -->

        <!-- bootstrap-modal-pop-up -->
        <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        Travel Agency
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <img src="images/1.jpg" alt=" " class="img-responsive" />
                        <p>Ut enim ad minima veniam, quis nostrum
                            exercitationem ullam corporis suscipit laboriosam,
                            nisi ut aliquid ex ea commodi consequatur? Quis autem
                            vel eum iure reprehenderit qui in ea voluptate velit
                            esse quam nihil molestiae consequatur, vel illum qui
                            dolorem eum fugiat quo voluptas nulla pariatur.
                            <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                                esse quam nihil molestiae consequatur.</i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //bootstrap-modal-pop-up -->
        <!-- js -->
        <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
        <!-- for bootstrap working -->
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <!-- //for bootstrap working -->
        <!-- //js -->
        <!-- //here starts scrolling icon -->
        <script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
        <!-- here stars scrolling script -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                	var defaults = {
                	containerID: 'toTop', // fading element id
                	containerHoverID: 'toTopHover', // fading element hover id
                	scrollSpeed: 1200,
                	easingType: 'linear' 
                	};
                */

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <!-- //here ends scrolling script -->
        <!-- //here ends scrolling icon -->

        <!-- scrolling script -->
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- //scrolling script -->
        <!-- responsiveslides -->
        <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function() {
                // Slideshow 4
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: false,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function() {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function() {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });
        </script>
        <!-- //responsiveslides -->
        <!-- stats -->
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.countup.js') }}"></script>
        <script>
            $('.counter').countUp();
        </script>
        <!-- //stats -->
        <!-- FlexSlider-JavaScript -->
        <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //FlexSlider-JavaScript -->

    </body>

</html>