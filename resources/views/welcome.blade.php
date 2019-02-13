@extends('layouts.head')

        @section('content')

            <div id="top-content">

                    <div id="fixed-social">
                        <div><a href="#" class="fixed fixed-facebook" target="_blank"><span>Facebook</span></a></div>
                        <div><a href="#" class="fixed fixed-twitter" target="_blank"><span>Twitter</span></a></div>
                        <div><a href="#" class="fixed fixed-instagram" target="_blank"><span>Instagram</span></a></div>
                    </div>

                    <?php use Illuminate\Support\Facades\Request;?>
                <div id="fixed-language">
                        <div class="menu-item"><a class="lang lang-en" href="/en/@if(Request::segment(2)!=null){{Request::segment(2)}}@endif">EN</a></div>
                        <div class="menu-item"><a class="lang lang-fr" href="/fr/@if(Request::segment(2)!=null){{Request::segment(2)}}@endif">FR</a></div>
                        <div class="menu-item"><a class="lang lang-de" href="/de/@if(Request::segment(2)!=null){{Request::segment(2)}}@endif">DE</a></div>
                </div>


                <div class="container">

                    <div id="content-img">

                        <div id='desert'><object type="text/html" data="/virap/virap.html"></object></div>

                        <div class='corners'></div>
                    </div>

                    <div id="content-text">
                        <h1> @lang('home.top_h1') </h1>
                    </div>

                </div>
            </div>


            <div id="middle-content">

                <div class="container">

                    <div id="boxes">
                        <div class="box box1">
                            <h2><span class="icon"></span>@lang('home.box1_h2')</h2>
                            <p id="wave">〰〰〰〰〰〰〰</p>
                            <p>@lang('home.box1_p')</p>
                        </div>
                        <div class="box box2">
                            <h2><span class="icon"></span>@lang('home.box2_h2')</h2>
                            <p id="wave">〰〰〰〰〰〰〰</p>
                            <p>@lang('home.box2_p')</p>
                        </div>
                        <div class="box box3">
                            <h2><span class="icon"></span>@lang('home.box3_h2')</h2>
                            <p id="wave">〰〰〰〰〰〰〰</p>
                            <p>@lang('home.box3_p')</p>
                        </div>
                        <div class="box box4">
                            <h2><span class="icon"></span>@lang('home.box4_h2')</h2>
                            <p id="wave">〰〰〰〰〰〰〰</p>
                            <p>@lang('home.box4_p')</p>
                        </div>
                    </div>

                    <div id="enquire">
                        <a id="enquire-a" role="button">@lang('home.enquire_now')</a>
                    </div>

                    <div id="popup">
                        <img id="star" src="/images/ornament.png">
                        <h1 id="step-1">@lang('home.popup_h1')</h1>
                        <p id="step-2">@lang('home.popup_p')</p>
                    </div>

                </div>


                <!-- Include Modal FORM -->
    @include('layouts.form')


                <!-- dest -->
                <div id="destinations">
                    <h2>@lang('home.destinations')</h2>

                    <div id="slider-container">
                        <div class="slider">

                            <?php
                            $cntrs = array('armenia', 'georgia', 'iran', 'tajikistan', 'turkmenistan', 'kazakhstan', 'mongolia', 'uzbekistan', 'kyrgyzstan');

                            ?>
                            @foreach($cntrs as $cntr)
                                <span>
                    <a class="dest-a" href="/{{App::getLocale()}}/{{$cntr}}" target="_self">
		                <img src="/images/{{$cntr}}/{{$cntr}}.jpg"/>
		                <div class="corner-dest"></div>
		                <p class="dest-name">{{$cntr}}</p>
                    </a>
                </span>
                            @endforeach

                        </div>
                    </div>

                </div>
                <!-- end dest -->

                <div class="container">

                    <div id="trip">
                        <h2>@lang('home.trip_h2')</h2>
                        <div id="trip-boxes">

                            <div class="trip-box" id="trip-box1">
                                <p><span class="icon"></span></p>
                                <p>@lang('home.trip-box1_p')</p>
                            </div>
                            <div class="trip-box" id="trip-box2">
                                <p><span class="icon"></span></p>
                                <p>@lang('home.trip-box2_p')</p>
                            </div>
                            <div class="trip-box" id="trip-box3">
                                <p><span class="icon"></span></p>
                                <p>@lang('home.trip-box3_p')</p>
                            </div>
                            <div class="trip-box" id="trip-box4">
                                <p><span class="icon"></span></p>
                                <p>@lang('home.trip-box4_p')</p>
                            </div>
                        </div>
                    </div>


                    <div id="contact">
                        <div id="help">
                            <h2>@lang('home.contact')</h2>
                            <div id="contact-boxes">

                                <div class="contact-box" id="contact-box1">
                                    <p><span class="icon"></span></p>
                                    <p id="wave">〰〰〰〰〰</p>
                                    <p>@lang('home.contact-box1_p')</p>
                                </div>
                                <div class="contact-box" id="contact-box2">
                                    <p><span class="icon"></span></p>
                                    <p id="wave">〰〰〰〰〰</p>
                                    <p>@lang('home.contact-box2_p')</p>
                                </div>
                                <div class="contact-box" id="contact-box3">
                                    <p><span class="icon"></span></p>
                                    <p id="wave">〰〰〰〰〰</p>
                                    <p>@lang('home.contact-box3_p')</p>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

@endsection



