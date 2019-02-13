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
                
    @if($countryName !='terms' && $countryName != 'privacy_policy')
    <div class="container">

      <section id="slidecorner">
            <div  id="slideshow">
                <div>
                    <img src="/images/{{$countryName}}/{{$countryName}}_1.jpg">
                </div>
                <div>
                    <img src="/images/{{$countryName}}/{{$countryName}}_2.jpg">
                </div>
                <div>
                    <img src="/images/{{$countryName}}/{{$countryName}}_3.jpg">
                </div>

            </div>
            <div class="corners"></div>
        </section>
                
    </div>
   
    <div id="content-text">
        <h1>@lang($countryName.'.top_h1')</h1>
    </div>

    @endif

</div>

<div id="middle-content">


    <div id="about-country">
        <img id="star-country" src="/images/ornament.png">
        <h1>@lang($countryName.'.popup_h1')</h1>
        <p>@lang($countryName.'.popup_p')</p>
    </div>

    <div id="enquire">
        <a id="enquire-a" role="button">@lang('home.enquire_now')</a>
    </div>

    @include('layouts.form')

</div>

@endsection