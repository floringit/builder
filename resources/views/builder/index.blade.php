@extends('builder.layouts.builder')

@section('title', __('content.home_title'))

@section('content')
    <div class="main-container">
        <section id="index-section" class="cover height-100 imagebg" data-overlay="9">
            <div class="background-image-holder">
                <img alt="background" src="img/img4.jpg" />
            </div>
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Hi Florin, I am Bilya :)</h1>
                        <p class="lead">I will be your trusty assistant in creating your new stunning website.</p>
                        <p class="lead">To start, I will need some website details:</p>

                        {!! Form::open(['url' => '', 'id' => 'website-info', 'class' => 'col-sm-6']) !!}

                        <div class="form-group">
                            {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Website name']) !!}
                        </div>

                        <div class="form-group">
                            <div class="input-select">
                                <select name="category" class="form-control" placeholder="Category">
                                    <option selected="" value="">Category</option>
                                    <option value="0">Real Estate Agency</option>
                                    <option value="1">Real Estate Agent</option>
                                    <option value="2">Rezidential Area</option>
                                    <option value="3">Real Estate Attorney</option>
                                    <option value="4">Real Estate Consultant</option>
                                </select>
                            </div>
                        </div>

                        {!! Form::close() !!}

                        <br>
                        <p class="lead col-xs-12">Thank you Florin, now you will have to choose a starting theme<br>
                            or you can build the website from scratch.<br> <a href="#" class="pull-right">NEXT</a></p>

                        {{--<a class="btn btn--primary type--uppercase" href="#">--}}
                            {{--<span class="btn__text">--}}
                                {{--{{ __('content.btn_start') }}--}}
                            {{--</span>--}}
                        {{--</a>--}}
                    </div>
                </div>
            </div>
        </section>
        <section id="theme-section" class="cover height-100 imagebg image--light" data-overlay="8">
            <div class="background-image-holder">
                <img alt="background" src="img/img5.jpeg" />
            </div>
            <div class="col-md-1 col-sm-2 hidden-xs">
                <div class="bar__module">
                    <a href="{{ URL::to('/') }}" class="logo-text">
                        <h3>
                            <strong>weBilya</strong>
                        </h3>
                    </a>
                </div>
            </div>
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="lead text-center">Florin, you can choose a starting theme or&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="btn type--uppercase" href="{{ URL::to('editor') }}">
                                <span class="btn__text">
                                    Skip
                                </span>
                            </a>
                        </p>
                        <br>
                        <div class="masonry">
                            <div class="masonry__container">
                                <div class="masonry__item col-md-3 starting-theme">
                                    <div class="hover-shadow">
                                        <img alt="Landing 1" src="img/demos/landing-1.jpg">
                                    </div>
                                </div>
                                <div class="masonry__item col-md-3 starting-theme">
                                    <div class="hover-shadow">
                                        <img alt="Landing 1" src="img/demos/landing-1.jpg">
                                    </div>
                                </div>
                                <div class="masonry__item col-md-3 starting-theme">
                                    <div class="hover-shadow">
                                        <img alt="Landing 1" src="img/demos/landing-1.jpg">
                                    </div>
                                </div>
                                <div class="masonry__item col-md-3 starting-theme">
                                    <div class="hover-shadow">
                                        <img alt="Landing 1" src="img/demos/landing-1.jpg">
                                    </div>
                                </div>
                                <div class="masonry__item col-md-3 starting-theme">
                                    <div class="hover-shadow">
                                        <img alt="Landing 1" src="img/demos/landing-1.jpg">
                                    </div>
                                </div>
                                <div class="masonry__item col-md-3 starting-theme">
                                    <div class="hover-shadow">
                                        <img alt="Landing 1" src="img/demos/landing-1.jpg">
                                    </div>
                                </div>
                                <div class="masonry__item col-md-3 starting-theme">
                                    <div class="hover-shadow">
                                        <img alt="Landing 1" src="img/demos/landing-1.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <a class="btn btn--sm btn--primary type--uppercase pull-right" href="{{ URL::to('editor') }}">
                            <span class="btn__text">
                                Go to builder
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection