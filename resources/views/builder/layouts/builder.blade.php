<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">

        <title>Webilya.com | @yield('title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/stack-interface.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/socicon.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/lightbox.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/flickity.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/iconsmind.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/jquery.steps.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/font-rubiklato.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/builder.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700%7CRubik:300,400,500" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="">
        <header class="nav-container">
            <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3 col-sm-2">
                            <a href="{{ URL::to('/') }}" class="logo-text">
                                <h3>
                                    <strong>builder</strong>
                                </h3>
                            </a>
                        </div>
                        <div class="col-xs-9 col-sm-10 text-right">
                            <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm">
                                <i class="icon icon--sm stack-interface stack-menu"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <nav id="menu2" class="bar bar-2 hidden-xs bar--transparent bar--absolute">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 hidden-xs">
                            <div class="bar__module">
                                <a href="{{ URL::to('/') }}" class="logo-text">
                                    <h3>
                                        <strong>builder</strong>
                                    </h3>
                                </a>
                            </div>
                        </div>

                        @if (!empty($edit))
                            <div class="col-md-10 col-sm-10 col-xs-9">
                                <div class="bar__module">
                                    <a class="menu-toggle pull-right" href="#" data-notification-link="sidebar-menu">
                                        <i class="stack-interface stack-menu"></i>
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </nav>
        </header>

        @if (!empty($edit))
        <div class="notification pos-right pos-top side-menu bg--white notification--reveal notification--dismissed" data-notification-link="sidebar-menu" data-animation="from-right">
            <div class="side-menu__module text-right">
                <ul class="menu-vertical">
                    <li>
                        <a class="inner-link" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="inner-link" href="#about">About</a>
                    </li>
                    <li>
                        <a class="inner-link" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="inner-link" href="#work">Work</a>
                    </li>
                    <li>
                        <a class="inner-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="side-menu__module pos-bottom pos-absolute col-xs-12 text-right">
                <ul class="social-list list-inline text-right list--hover">
                    <li>
                        <a href="#">
                            <i class="socicon socicon-google icon icon--xs"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="socicon socicon-twitter icon icon--xs"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="socicon socicon-facebook icon icon--xs"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="socicon socicon-instagram icon icon--xs"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="notification-close-cross notification-close"></div>
        </div>

        <div id="widget-wrapper" class="notification pos-bottom pos-left bottom-menu bg--white notification--reveal notification--dismissed" data-notification-link="bottom-menu" data-animation="from-bottom">
            <div class="slider variants col-sm-12" data-arrows="true" data-paging="false">
                <ul class="slides">
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                    <li class="col-md-1 col-sm-2 col-xs-3 web-widget">
                        <div class="row hover-shadow">
                            widget
                        </div>
                    </li>
                </ul>
            </div>

            <ul id="widgets-menu">
                <li class="current">
                    <a href="#">All</a>
                </li>
                <li>
                    <a href="#">Content</a>
                </li>
                <li>
                    <a href="#">Header</a>
                </li>
                <li>
                    <a href="#">Footer</a>
                </li>
                <li>
                    <a href="#">Real Estate</a>
                </li>
            </ul>
        </div>

        <div class="all-page-modals">
            <div class="modal-container" data-modal-index="1">
                @include('builder.modals.navigation')
            </div>
            <div class="modal-container" data-modal-index="2">
                @include('builder.modals.section')
            </div>
            <div class="modal-container" data-modal-index="3">
                @include('builder.modals.page')
            </div>
            <div class="modal-container" data-modal-index="4">
                @include('builder.modals.footer')
            </div>
        </div>
        @endif

        @yield('content')


        <!-- vue js resources -->
        <script src="{{ URL::asset('js/vue.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.3"></script>

        <script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ URL::asset('js/flickity.min.js') }}"></script>
        <script src="{{ URL::asset('js/easypiechart.min.js') }}"></script>
        <script src="{{ URL::asset('js/parallax.js') }}"></script>
        <script src="{{ URL::asset('js/typed.min.js') }}"></script>
        <script src="{{ URL::asset('js/datepicker.js') }}"></script>
        <script src="{{ URL::asset('js/isotope.min.js') }}"></script>
        <script src="{{ URL::asset('js/ytplayer.min.js') }}"></script>
        <script src="{{ URL::asset('js/lightbox.min.js') }}"></script>
        <script src="{{ URL::asset('js/granim.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.steps.min.js') }}"></script>
        <script src="{{ URL::asset('js/countdown.min.js') }}"></script>
        <script src="{{ URL::asset('js/twitterfetcher.min.js') }}"></script>
        <script src="{{ URL::asset('js/spectragram.min.js') }}"></script>
        <script src="{{ URL::asset('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ URL::asset('js/scripts.js') }}"></script>

        <!-- page related js resources -->
        @if (!empty($jss))
            @foreach ($jss as $js)
        <script src="{{ URL::asset('js/' . $js) }}"></script>
            @endforeach
        @endif
    </body>
</html>