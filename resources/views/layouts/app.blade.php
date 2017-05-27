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

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700%7CRubik:300,400,500" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="">
        <a id="start"></a>

        <header class="nav-container">
            <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3 col-sm-2">
                            <a href="{{ URL::to('/') }}" class="logo-text">
                                <h3>
                                    <strong>webilya</strong>
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
            <nav id="menu2" class="bar bar-2 hidden-xs bar--transparent bar--absolute" data-scroll-class='30vh:pos-fixed'>
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 col-sm-2 hidden-xs">
                            <div class="bar__module">
                                <a href="{{ URL::to('/') }}" class="logo-text">
                                    <h3>
                                        <strong>webilya</strong>
                                    </h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-11 col-sm-12 text-right text-left-xs text-left-sm">
                            <div class="bar__module">
                                <ul class="menu-horizontal text-left">
                                    <li>
                                        <a href="{{ URL::to('features') }}">{{ __('menu.features') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('examples') }}">{{ __('menu.examples') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('themes') }}">{{ __('menu.themes') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('pricing') }}">{{ __('menu.pricing') }}</a>
                                    </li>
                                    <li class="dropdown">
                                        <span class="dropdown__trigger">{{ __('menu.more') }}</span>
                                        <div class="dropdown__container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12 dropdown__content dropdown__content--lg">
                                                        <div class="pos-absolute col-md-3 imagebg hidden-sm hidden-xs" data-overlay="4">
                                                            <div class="background-image-holder">
                                                                <img alt="background" src="img/dropdown-1.jpg" />
                                                            </div>
                                                            <div class="container pos-vertical-center">
                                                                <div class="row">
                                                                    <div class="col-md-8 col-md-offset-2">
                                                                        <span class="h4 color--white">{{ __('content.menu_dropdown') }}</span>
                                                                    </div>
                                                                </div>
                                                                <!--end of row-->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-md-offset-4">
                                                            <h5>{{ __('menu.support') }}</h5>
                                                            <ul class="menu-vertical">
                                                                <li>
                                                                    <a href="home-construction.html">
                                                                        {{ __('menu.docs') }}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="home-coworking.html">
                                                                        {{ __('menu.supportcenter') }}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <h5>{{ __('menu.company') }}</h5>
                                                            <ul class="menu-vertical">
                                                                <li>
                                                                    <a href="home-landing-1.html">
                                                                        {{ __('menu.about') }}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="home-landing-2.html">
                                                                        {{ __('menu.careers') }}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="home-landing-3.html">
                                                                        {{ __('menu.press') }}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="home-landing-4.html">
                                                                        {{ __('menu.contact') }}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <h5>{{ __('menu.resources') }}</h5>
                                                            <ul class="menu-vertical">
                                                                <li>
                                                                    <a href="home-landing-1.html">
                                                                        Landing 1
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="home-landing-2.html">
                                                                        Landing 2
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="home-landing-3.html">
                                                                        Landing 3
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="home-landing-4.html">
                                                                        Landing 4
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="home-landing-5.html">
                                                                        Landing 5
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <h5>{{ __('menu.partners') }}</h5>
                                                            <ul class="menu-vertical">
                                                                <li>
                                                                    <a href="home-landing-1.html">
                                                                        Landing 1
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="home-landing-2.html">
                                                                        Landing 2
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="home-landing-3.html">
                                                                        Landing 3
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="home-landing-4.html">
                                                                        Landing 4
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--end dropdown content-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end dropdown container-->
                                    </li>
                                </ul>
                            </div>

                            @if (is_null($user))
                            <div class="bar__module">
                                <a class="btn btn--sm type--uppercase modal-trigger" href="#" data-modal-index="5">
                                    <span class="btn__text">
                                        {{ __('menu.login') }}
                                    </span>
                                </a>
                                <a class="btn btn--sm btn--primary type--uppercase modal-trigger" href="#" data-modal-index="3">
                                    <span class="btn__text">
                                        {{ __('menu.register') }}
                                    </span>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer class="space--sm footer-2 ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-xs-6">
                        <h6 class="type--uppercase">{{ __('menu.support') }}</h6>
                        <ul class="list--hover">
                            <li>
                                <a href="home-construction.html">
                                    {{ __('menu.docs') }}
                                </a>
                            </li>
                            <li>
                                <a href="home-coworking.html">
                                    {{ __('menu.supportcenter') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-6">
                        <h6 class="type--uppercase">{{ __('menu.company') }}</h6>
                        <ul class="list--hover">
                            <li>
                                <a href="home-landing-1.html">
                                    {{ __('menu.about') }}
                                </a>
                            </li>
                            <li>
                                <a href="home-landing-2.html">
                                    {{ __('menu.careers') }}
                                </a>
                            </li>
                            <li>
                                <a href="home-landing-3.html">
                                    {{ __('menu.press') }}
                                </a>
                            </li>
                            <li>
                                <a href="home-landing-4.html">
                                    {{ __('menu.contact') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-6">
                        <h6 class="type--uppercase">{{ __('menu.resources') }}</h6>
                        <ul class="list--hover">
                            <li>
                                <a href="#">Help Center</a>
                            </li>
                            <li>
                                <a href="#">Live Chat</a>
                            </li>
                            <li>
                                <a href="#">Downloads</a>
                            </li>
                            <li>
                                <a href="#">Press Kit</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-6">
                        <h6 class="type--uppercase">{{ __('menu.partners') }}</h6>
                        <ul class="list--hover">
                            <li>
                                <a href="#">Melbourne</a>
                            </li>
                            <li>
                                <a href="#">London</a>
                            </li>
                            <li>
                                <a href="#">New York</a>
                            </li>
                            <li>
                                <a href="#">San Francisco</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                            <span class="type--fine-print">©
                                <span class="update-year">2017</span> Webilya</span>
                        <a class="type--fine-print" href="#">{{ __('menu.policy') }}</a>
                        <a class="type--fine-print" href="#">{{ __('menu.terms') }}</a>
                    </div>
                    <div class="col-sm-6 text-right text-left-xs">
                        <ul class="social-list list-inline list--hover">
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
                </div>
            </div>
        </footer>

        <a class="back-to-top inner-link active" href="#start" data-scroll-class="50vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>

        <div class="all-page-modals">
            <div class="modal-container" data-modal-index="3">
                <div class="modal-content">
                    <section class="imageblock feature-large bg--white border--round ">
                        <div class="imageblock__content col-md-5 col-sm-3 pos-left">
                            <div class="background-image-holder" style="background-color: transparent; background-image: url(&quot;img/cowork-11.jpg&quot;); background-repeat: repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: initial; background-size: auto auto; opacity: 1;">
                                <img alt="image" src="img/cowork-11.jpg">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 col-md-push-6 col-sm-7 col-sm-push-4">
                                    <h2>Create an account</h2>
                                    <p class="lead">Get started with a 14 day free trial, No credit card required — cancel at any time.</p>
                                    <a class="btn block btn--icon bg--facebook type--uppercase" href="#">
                                                            <span class="btn__text">
                                                                <i class="socicon-facebook"></i>
                                                                Sign up with Facebook
                                                            </span>
                                    </a>
                                    <a class="btn block btn--icon bg--twitter type--uppercase" href="#">
                                                            <span class="btn__text">
                                                                <i class="socicon-twitter"></i>
                                                                Sign up with Twitter
                                                            </span>
                                    </a>
                                    <hr data-title="OR">
                                    <form>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input name="Email Address" placeholder="Email Address" type="email">
                                            </div>
                                            <div class="col-xs-12">
                                                <input name="Password" placeholder="Password" type="password">
                                            </div>
                                            <div class="col-xs-12">
                                                <button type="submit" class="btn btn--primary type--uppercase">Create Account</button>
                                            </div>
                                            <div class="col-xs-12">
                                                                    <span class="type--fine-print">By signing up, you agree to the
                                                                        <a href="#">Terms of Service</a>
                                                                    </span>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of container-->
                    </section>
                    <div class="modal-close modal-close-cross"></div></div>
            </div>
            <div class="modal-container" data-modal-index="5">
                <div class="modal-content">
                    <section class="unpad ">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-md-offset-3 col-sm-offset-3 col-xs-12">
                                    <div class="boxed boxed--lg bg--white text-center feature">
                                        <div class="modal-close modal-close-cross"></div>
                                        <h3>Login to Your Account</h3>
                                        <a class="btn block btn--icon bg--facebook type--uppercase" href="#">
                                                                <span class="btn__text">
                                                                    <i class="socicon-facebook"></i>
                                                                    Login with Facebook
                                                                </span>
                                        </a>
                                        <a class="btn block btn--icon bg--twitter type--uppercase" href="#">
                                                                <span class="btn__text">
                                                                    <i class="socicon-twitter"></i>
                                                                    Login with Twitter
                                                                </span>
                                        </a>
                                        <hr data-title="OR">
                                        <div class="feature__body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <input placeholder="Username" type="text">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <input placeholder="Password" type="password">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <button class="btn btn--primary type--uppercase" type="submit">Login</button>
                                                    </div>
                                                </div>
                                                <!--end of row-->
                                            </form>
                                            <span class="type--fine-print block">Dont have an account yet?
                                                                    <a href="#">Create account</a>
                                                                </span>
                                            <span class="type--fine-print block">Forgot your username or password?
                                                                    <a href="#">Recover account</a>
                                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of container-->
                    </section>
                </div>
            </div>
        </div>

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
    </body>
</html>