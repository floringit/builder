@extends('builder.layouts.builder')

@section('title', __('content.home_title'))

@section('content')
    <div class="main-container">
        <section class="space--xs imagebg height-100" data-gradient-bg="#4876BD,#5448BD,#8F48BD,#BD48B1" id="builder-wrapper">
            <canvas id="granim-0" width="1391" height="146"></canvas>
            <div class="container" id="browser-wrapper">
                <div class="row" id="browser">
                    <ul id="browser-tabs">
                        <li class="current">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                    <div id="location">
                        {!! Form::text('url', 'http://builder.com/website-name', ['id' => 'website-url', 'class' => 'form-control', 'readonly']) !!}
                        <div id="circles" class="pull-right">
                            <div data-tooltip="{{ __('builder.add_content') }}" class="dropdown">
                                <i class="dropdown__trigger glyphicon glyphicon-plus"></i>
                                <div class="dropdown__container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 dropdown__content text-left">
                                                <ul class="menu-vertical">
                                                    <li>
                                                        <a href="#" class="modal-trigger" data-modal-index="3">{{ __('builder.add_page') }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="modal-trigger" data-modal-index="1">{{ __('builder.add_navigation') }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="modal-trigger" data-modal-index="2">{{ __('builder.add_section') }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="modal-trigger" data-modal-index="4">{{ __('builder.add_footer') }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="menu-toggle" data-notification-link="bottom-menu">{{ __('builder.add_widget') }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-tooltip="{{ __('builder.page_settings') }}"><i class="icon  stack-cog" icon-class=" stack-cog" title="stack-cog"></i></div>
                            <div data-tooltip="{{ __('builder.remove_page') }}"><i class="glyphicon glyphicon-minus"></i></div>
                        </div>
                    </div>
                    <div id="website">
                        <nav id="menu2" class="bar bar-2 hidden-xs website-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2 text-center text-left-sm hidden-xs col-md-push-5">
                                        <div class="bar__module">
                                            <a href="index.html">
                                                <img class="logo logo-dark" alt="logo" src="img/logo-dark.png">
                                                <img class="logo logo-light" alt="logo" src="img/logo-light.png">
                                            </a>
                                        </div>
                                        <!--end module-->
                                    </div>
                                    <div class="col-md-5 col-md-pull-2">
                                        <div class="bar__module">
                                            <ul class="menu-horizontal text-left">
                                                <li class="dropdown">
                                                    <span class="dropdown__trigger">Home</span>
                                                    <div class="dropdown__container" style="left: -15px;">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-12 dropdown__content dropdown__content--lg" style="left: 15px;">
                                                                    <div class="pos-absolute col-md-5 imagebg hidden-sm hidden-xs" data-overlay="4">
                                                                        <div class="background-image-holder" style="background-color: transparent; background-image: url(&quot;img/dropdown-1.jpg&quot;); background-repeat: repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: initial; background-size: auto auto; opacity: 1;">
                                                                            <img alt="background" src="img/dropdown-1.jpg">
                                                                        </div>
                                                                        <div class="container pos-vertical-center">
                                                                            <div class="row">
                                                                                <div class="col-md-8 col-md-offset-2">
                                                                                    <img alt="Logo" src="img/logo-light.png" class="image--xxs">
                                                                                    <span class="h2 color--white">Beautiful, modular sites in moments.</span>
                                                                                    <a href="#" class="btn btn--primary type--uppercase">
                                                                                        <span class="label">$17 USD.</span>
                                                                                        <span class="btn__text">
                                                                                Purchase Stack Now
                                                                            </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--end of row-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2 col-md-offset-6 col-sm-4">
                                                                        <h5>Industries</h5>
                                                                        <ul class="menu-vertical">
                                                                            <li>
                                                                                <a href="home-construction.html">
                                                                                    Construction
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-coworking.html">
                                                                                    Coworking
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-drone-photography.html">
                                                                                    Drone Photography
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-education.html">
                                                                                    Education
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-event.html">
                                                                                    Event
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-fitness.html">
                                                                                    Fitness
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-health-insurance.html">
                                                                                    Insurance
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-knowledge-base.html">
                                                                                    Knowledge Base
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-musician.html">
                                                                                    Musician
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-nonprofit.html">
                                                                                    Nonprofit
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-political.html">
                                                                                    Political
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-restaurant.html">
                                                                                    Restaurant
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-recruitment.html">
                                                                                    Recruitment
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-tourism.html">
                                                                                    Tourism
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-wedding.html">
                                                                                    Wedding
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-4">
                                                                        <h5>Landing Pages</h5>
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
                                                                            <li>
                                                                                <a href="home-landing-6.html">
                                                                                    Landing 6
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-landing-7.html">
                                                                                    Landing 7
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-landing-8.html">
                                                                                    Landing 8
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-landing-9.html">
                                                                                    Landing 9
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-landing-10.html">
                                                                                    Landing 10
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-software-1.html">
                                                                                    Software 1
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-software-2.html">
                                                                                    Software 2
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-software-3.html">
                                                                                    Software 3
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-2 col-sm-4">
                                                                        <h5>Portfolios</h5>
                                                                        <ul class="menu-vertical">
                                                                            <li>
                                                                                <a href="home-portfolio-agency-1.html">
                                                                                    Agency
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-portfolio-agency-2.html">
                                                                                    Agency 2
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-portfolio-personal-1.html">
                                                                                    Personal 1
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-portfolio-photography.html">
                                                                                    Photography
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-portfolio-photography-2.html">
                                                                                    Photography 2
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-portfolio-studio-1.html">
                                                                                    Studio 1
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-portfolio-studio-2.html">
                                                                                    Studio 2
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-portfolio-video.html">
                                                                                    Video
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <h5>Coming Soon</h5>
                                                                        <ul class="menu-vertical">
                                                                            <li>
                                                                                <a href="home-coming-soon-1.html">
                                                                                    Coming Soon 1
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-coming-soon-2.html">
                                                                                    Coming Soon 2
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="home-coming-soon-3.html">
                                                                                    Coming Soon 3
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
                                                <li class="dropdown">
                                                    <span class="dropdown__trigger">Pages</span>
                                                    <div class="dropdown__container" style="left: -84.25px;">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="dropdown__content col-md-2 col-sm-4" style="left: 84.25px;">
                                                                    <ul class="menu-vertical">
                                                                        <li class="dropdown">
                                                                            <span class="dropdown__trigger">About</span>
                                                                            <div class="dropdown__container" style="left: -110.25px;">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="dropdown__content col-md-2" style="left: 110.25px;">
                                                                                            <ul class="menu-vertical">
                                                                                                <li>
                                                                                                    <a href="page-about-company.html">
                                                                                                        About Company
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-about-team.html">
                                                                                                        About Team
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-about-me.html">
                                                                                                        About Me
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-about-history.html">
                                                                                                        About History
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!--end dropdown content-->
                                                                                    </div>
                                                                                    <!--end row-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end dropdown container-->
                                                                        </li>
                                                                        <li class="dropdown">
                                                                            <span class="dropdown__trigger">Careers</span>
                                                                            <div class="dropdown__container" style="left: -110.25px;">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="dropdown__content col-md-2 col-sm-4" style="left: 110.25px;">
                                                                                            <ul class="menu-vertical">
                                                                                                <li>
                                                                                                    <a href="page-careers.html">
                                                                                                        Careers Listing
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-careers-single.html">
                                                                                                        Career Single
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!--end dropdown content-->
                                                                                    </div>
                                                                                    <!--end row-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end dropdown container-->
                                                                        </li>
                                                                        <li class="dropdown">
                                                                            <span class="dropdown__trigger">Contact</span>
                                                                            <div class="dropdown__container" style="left: -110.25px;">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="dropdown__content col-md-2 col-sm-4" style="left: 110.25px;">
                                                                                            <ul class="menu-vertical">
                                                                                                <li>
                                                                                                    <a href="page-contact-map-1.html">
                                                                                                        Contact Map 1
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-contact-map-2.html">
                                                                                                        Contact Map 2
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-contact-map-3.html">
                                                                                                        Contact Map 3
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-contact-map-4.html">
                                                                                                        Contact Map 4
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-contact-planner-1.html">
                                                                                                        Contact Planner 1
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-contact-planner-2.html">
                                                                                                        Contact Planner 2
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!--end dropdown content-->
                                                                                    </div>
                                                                                    <!--end row-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end dropdown container-->
                                                                        </li>
                                                                        <li class="dropdown">
                                                                            <span class="dropdown__trigger">Pricing</span>
                                                                            <div class="dropdown__container" style="left: -110.25px;">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="dropdown__content col-md-2 col-sm-4" style="left: 110.25px;">
                                                                                            <ul class="menu-vertical">
                                                                                                <li>
                                                                                                    <a href="page-pricing-1.html">
                                                                                                        Pricing Plans 1
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-pricing-2.html">
                                                                                                        Pricing Plans 2
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-pricing-3.html">
                                                                                                        Pricing Plans 3
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!--end dropdown content-->
                                                                                    </div>
                                                                                    <!--end row-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end dropdown container-->
                                                                        </li>
                                                                        <li class="dropdown">
                                                                            <span class="dropdown__trigger">Services</span>
                                                                            <div class="dropdown__container" style="left: -110.25px;">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="dropdown__content col-md-2 col-sm-4" style="left: 110.25px;">
                                                                                            <ul class="menu-vertical">
                                                                                                <li>
                                                                                                    <a href="page-services-1.html">
                                                                                                        Services 1
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-services-2.html">
                                                                                                        Services 2
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-services-3.html">
                                                                                                        Services 3
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!--end dropdown content-->
                                                                                    </div>
                                                                                    <!--end row-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end dropdown container-->
                                                                        </li>
                                                                        <li class="dropdown separate">
                                                                            <span class="dropdown__trigger">Accounts</span>
                                                                            <div class="dropdown__container" style="left: -110.25px;">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="dropdown__content col-md-2 col-sm-4" style="left: 110.25px;">
                                                                                            <ul class="menu-vertical">
                                                                                                <li>
                                                                                                    <a href="page-accounts-settings.html">
                                                                                                        Account Settings
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-accounts-login-1.html">
                                                                                                        Login Simple
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-accounts-login-2.html">
                                                                                                        Login Social
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-accounts-create-1.html">
                                                                                                        Create Simple
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-accounts-create-2.html">
                                                                                                        Create Social
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-accounts-recover.html">
                                                                                                        Recover Account
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!--end dropdown content-->
                                                                                    </div>
                                                                                    <!--end row-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end dropdown container-->
                                                                        </li>
                                                                        <li class="dropdown">
                                                                            <span class="dropdown__trigger">Utilities</span>
                                                                            <div class="dropdown__container" style="left: -110.25px;">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="dropdown__content col-md-2 col-sm-4" style="left: 110.25px;">
                                                                                            <ul class="menu-vertical">
                                                                                                <li>
                                                                                                    <a href="page-utility-conversation.html">
                                                                                                        Conversation
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="404.html">
                                                                                                        Error 404
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="500.html">
                                                                                                        Error 500
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-utility-maintnence.html">
                                                                                                        Maintnence Mode
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-utility-onboarding.html">
                                                                                                        Onboarding
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="page-utility-search-results.html">
                                                                                                        Search Results
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!--end dropdown content-->
                                                                                    </div>
                                                                                    <!--end row-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end dropdown container-->
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!--end dropdown content-->
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                    </div>
                                                    <!--end dropdown container-->
                                                </li>
                                                <li class="dropdown">
                                                    <span class="dropdown__trigger">Blocks</span>
                                                    <div class="dropdown__container" style="left: -152.267px;">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="dropdown__content dropdown__content--lg col-md-8" style="left: 152.267px;">
                                                                    <div class="pos-absolute col-md-5 imagebg hidden-sm hidden-xs" data-overlay="6">
                                                                        <div class="background-image-holder" style="background-color: transparent; background-image: url(&quot;img/inner-6.jpg&quot;); background-repeat: repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: initial; background-size: auto auto; opacity: 1;">
                                                                            <img alt="background" src="img/inner-6.jpg">
                                                                        </div>
                                                                        <div class="container pos-vertical-center">
                                                                            <div class="row">
                                                                                <div class="col-md-10 col-md-offset-1">
                                                                                    <img alt="Logo" src="img/logo-light.png" class="image--xxs">
                                                                                    <span class="h3 color--white">Over 280 modular interface blocks.</span>
                                                                                    <a href="#" class="btn btn--primary type--uppercase">
                                                                            <span class="btn__text">
                                                                                Launch Builder
                                                                            </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--end of row-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-md-offset-6">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <ul class="menu-vertical">
                                                                                    <li>
                                                                                        <a href="sections-accordions.html">
                                                                                            Accordions
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-cta.html">
                                                                                            Calls To Action
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-cards.html">
                                                                                            Cards
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-covers.html">
                                                                                            Covers
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-features-small.html">
                                                                                            Features Small
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-features-large.html">
                                                                                            Features Large
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-contact.html">
                                                                                            Forms Contact
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-signup.html">
                                                                                            Forms Signup
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-subscribe.html">
                                                                                            Forms Subscribe
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-footers.html">
                                                                                            Footers
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-galleries.html">
                                                                                            Galleries
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-instagram.html">
                                                                                            Instagram
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-maps.html">
                                                                                            Maps
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <ul class="menu-vertical">
                                                                                    <li>
                                                                                        <a href="sections-modals.html">
                                                                                            Modals
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-navigation.html">
                                                                                            Navigation Bars
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-notifications.html">
                                                                                            Notifications
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-pricing.html">
                                                                                            Pricing
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-processes.html">
                                                                                            Processes
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-sliders.html">
                                                                                            Sliders
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-twitter.html">
                                                                                            Twitter
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-tabs.html">
                                                                                            Tabs
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-team.html">
                                                                                            Teams
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-testimonials.html">
                                                                                            Testimonials
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-text-layouts.html">
                                                                                            Text Layouts
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-titles.html">
                                                                                            Titles
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="sections-videos.html">
                                                                                            Videos
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!--end of row-->
                                                                    </div>
                                                                </div>
                                                                <!--end dropdown content-->
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                        <!--end container-->
                                                    </div>
                                                    <!--end dropdown container-->
                                                </li>
                                                <li class="dropdown">
                                                    <span class="dropdown__trigger">Elements</span>
                                                    <div class="dropdown__container" style="left: -223.617px;">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="dropdown__content dropdown__content--lg col-md-8 col-sm-12" style="left: 223.617px;">
                                                                    <div class="pos-absolute col-md-5 imagebg hidden-sm hidden-xs" data-overlay="5">
                                                                        <div class="background-image-holder" style="background-color: transparent; background-image: url(&quot;img/dropdown-2.jpg&quot;); background-repeat: repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: initial; background-size: auto auto; opacity: 1;">
                                                                            <img alt="background" src="img/dropdown-2.jpg">
                                                                        </div>
                                                                        <div class="container pos-vertical-center">
                                                                            <div class="row">
                                                                                <div class="col-md-10 col-md-offset-1">
                                                                                    <img alt="Logo" src="img/logo-light.png" class="image--xxs">
                                                                                    <span class="h3 color--white">Detailed and organised elements</span>
                                                                                    <a href="elements.html" class="btn btn--primary type--uppercase">
                                                                            <span class="btn__text">
                                                                                Explore Elements
                                                                            </span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--end of row-->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-md-offset-6">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <ul class="menu-vertical">
                                                                                    <li>
                                                                                        <a href="elements-accordions.html">
                                                                                            Accordions
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-boxes.html">
                                                                                            Boxes
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-buttons.html">
                                                                                            Buttons
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-colors.html">
                                                                                            Colors
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-countdown.html">
                                                                                            Countdown
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-dropdowns.html">
                                                                                            Dropdowns
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-form-elements.html">
                                                                                            Form Elements
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-gradient-backgrounds.html">
                                                                                            Gradient Backgrounds
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-grid.html">
                                                                                            Grid System
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-image-backgrounds.html">
                                                                                            Image Backgrounds
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-instagram.html">
                                                                                            Instagram
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-lightbox.html">
                                                                                            Lightbox
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-maps.html">
                                                                                            Maps
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-masonry.html">
                                                                                            Masonry
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-modals.html">
                                                                                            Modals
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-navigation.html">
                                                                                            Navigation Bars
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-navigation-inpage.html">
                                                                                            Navigation In-Page
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <ul class="menu-vertical">
                                                                                    <li>
                                                                                        <a href="elements-navigation-sidebar.html">
                                                                                            Navigation Sidebar
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-notifications.html">
                                                                                            Notifications
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-parallax.html">
                                                                                            Parallax
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-pricing.html">
                                                                                            Pricing
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-radials.html">
                                                                                            Radials
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-scrims-overlays.html">
                                                                                            Scrims &amp; Overlays
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-sliders.html">
                                                                                            Sliders
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-tables.html">
                                                                                            Tables
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-tabs.html">
                                                                                            Tabs
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-tooltips.html">
                                                                                            Tooltips
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-twitter.html">
                                                                                            Twitter Feed
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-typed-text.html">
                                                                                            Typed Text
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-typography.html">
                                                                                            Typography
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-video-background.html">
                                                                                            Video Backgrounds
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-video-inline.html">
                                                                                            Video Inline
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="elements-wizards.html">
                                                                                            Wizards
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!--end of row-->
                                                                    </div>
                                                                </div>
                                                                <!--end dropdown content-->
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                        <!--end container-->
                                                    </div>
                                                    <!--end dropdown container-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--end module-->
                                    </div>
                                    <div class="col-md-5 text-right text-left-xs text-left-sm">
                                        <div class="bar__module">
                                            <a class="btn btn--sm type--uppercase" href="#">
                                    <span class="btn__text">
                                        Try Builder
                                    </span>
                                            </a>
                                            <a class="btn btn--sm btn--primary type--uppercase" href="#">
                                    <span class="btn__text">
                                        Buy Now
                                    </span>
                                            </a>
                                        </div>
                                        <!--end module-->
                                    </div>
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of container-->
                        </nav>
                        <section class="text-center" id="no-data">
                            <section class="no-data top"></section>
                            <section class="no-data center text-center">
                                <h2>{{ __('builder.nodata_head') }}</h2>
                                <p class="lead">{!! __('builder.nodata_subhead') !!}</p>
                            </section>
                            <section class="no-data bottom"></section>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection