@extends('layouts.app')

@section('title', __('content.home_title'))

@section('content')
<div class="main-container">
    <section class="cover height-90 text-center imagebg parallax videobg video-active" data-overlay="1">
        <video autoplay="" loop="" muted="">
            <source src="videos/674118136.mp4" type="video/mp4">
        </video>
        <div class="background-image-holder">
            <img alt="background" src="img/landing-13.jpg" />
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="typed-headline">
                        <span class="h1 inline-block">{{ __('content.home_heading') }} </span>
                        <span class="h1 inline-block typed-text typed-text--cursor color--primary" data-typed-strings="{{ __('content.home_type_e') }}">{{ __('content.home_type_first') }}</span>
                    </div>
                    <p class="lead">
                        {!! __('content.home_subheading') !!}
                    </p>
                    <a class="btn btn--primary type--uppercase" href="#">
                        <span class="btn__text">
                            {{ __('content.btn_start') }}
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-4">
                    <div class="switchable__text">
                        <br>
                        <br>
                        <h3>{{ __('content.head1') }}</h3>
                        <hr class="short">
                        <p class="lead">{{ __('content.subhead1') }}</p>
                        <p>
                            <a class="btn btn--sm type--uppercase" href="#">
                                    <span class="btn__text">
                                        {{ __('content.see_more') }}
                                    </span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-7 pull-right">
                    <img alt="Image" src="{{ URL::asset('img/device-2.png') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="imagebg parallax" data-overlay="6">
        <div class="background-image-holder">
            <img alt="background" src="{{ URL::asset('img/img1.jpeg') }}" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature feature-2 boxed boxed--border">
                        <i class="icon icon-Clock-Back color--primary"></i>
                        <div class="feature__body">
                            <p>
                                {{ __('content.box1') }}
                            </p>
                        </div>
                    </div>
                    <!--end feature-->
                </div>
                <div class="col-sm-4">
                    <div class="feature feature-2 boxed boxed--border">
                        <i class="icon icon-Duplicate-Window color--primary"></i>
                        <div class="feature__body">
                            <p>
                                {{ __('content.box2') }}
                            </p>
                        </div>
                    </div>
                    <!--end feature-->
                </div>
                <div class="col-sm-4">
                    <div class="feature feature-2 boxed boxed--border">
                        <i class="icon icon-Life-Jacket color--primary"></i>
                        <div class="feature__body">
                            <p>
                                {{ __('content.box3') }}
                            </p>
                        </div>
                    </div>
                    <!--end feature-->
                </div>
            </div>
            <!--end of row-->
        </div>
    </section>

    <section class="switchable feature-large">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img alt="Image" src="img/art-3.jpg">
                </div>
                <div class="col-sm-6 col-md-5">
                    <div class="switchable__text">
                        <h2>{{ __('content.head2') }}</h2>
                        <hr class="short">
                        <p class="lead">
                            {{ __('content.subhead2') }}
                        </p>
                        <a href="#">{{ __('content.btn_start') }} »</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space--xs imagebg text-center" data-gradient-bg="#4876BD,#5448BD,#8F48BD,#BD48B1">
        <canvas id="granim-0" width="1391" height="146"></canvas>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-10">
                    <div class="slider" data-paging="true">
                        <ul class="slides">
                            <li>
                                <div class="testimonial">
                                    <blockquote>
                                        &ldquo;{{ __('content.test1') }}&rdquo;
                                    </blockquote>
                                    <h5>{{ __('content.name1') }}</h5>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <blockquote>
                                        &ldquo;{{ __('content.test2') }}&rdquo;
                                    </blockquote>
                                    <h5>{{ __('content.name2') }}</h5>
                                </div>
                            </li>
                            <li>
                                <div class="testimonial">
                                    <blockquote>
                                        &ldquo;{{ __('content.test3') }}&rdquo;
                                    </blockquote>
                                    <h5>{{ __('content.name3') }}</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="switchable switchable--switch feature-large">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img alt="Image" src="img/art-4.jpg">
                </div>
                <div class="col-sm-6 col-md-5 col-md-offset-1">
                    <div class="switchable__text">
                        <h2>{!! __('content.head3') !!}</h2>
                        <hr class="short">
                        <p class="lead">
                            {!! __('content.subhead3') !!}
                        </p>
                        <a href="#">{{ __('content.btn_start') }} »</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space--xs imagebg text-center" data-gradient-bg="#4876BD,#5448BD,#8F48BD,#BD48B1">
        <div class="container">
            <div class="row">
                <div class="cta cta--horizontal text-center-xs">
                    <h3>{!! __('content.subhead4') !!}</h3>
                    <a class="btn btn--primary type--uppercase" href="#">
                        <span class="btn__text">
                            {{ __('content.btn_start') }}
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection