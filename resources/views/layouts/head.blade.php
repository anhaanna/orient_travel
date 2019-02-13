<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @if(Request::segment(2)==null)
        <title>@lang('home.title')</title>
        <meta name="keywords" content="@lang('home.keywords')">
        <meta name="description" content="@lang('home.meta_description')">
    @else
        <title>@lang($countryName.'.title')</title>
        <meta name="keywords" content="@lang($countryName.'.keywords')">
        <meta name="description" content="@lang($countryName.'.meta_description')">
    @endif

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='/js/main.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />


    

</head>

<body>


        <a href='/{{App::getLocale()}} '  id="orient-logo">
            <img src="/images/orient.svg" alt="Orient Travel">
        </a>

        <div class="guide">
            <a id="ara_guide" role="button">
                <img src="/images/ara.png" alt="Ara Khurshudian" title="Ara Khurshudian">
                <p class="guide_p">@lang('home.advisor')</p>
            </a>
        </div>


@yield('content')

    <footer>
        <div class="container">
            <div id="footer">
                <div class="footer-dest footer-first">
                    <ul class="footer1 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-10 parent" itemprop="name">
                            <a itemprop="url" href="/{{App::getLocale()}}/terms" >@lang('home.terms')</a>

                        </li>
                        <li class="item-11" itemprop="name">
                            <a itemprop="url" href="/{{App::getLocale()}}/privacy_policy" >@lang('home.privacy')</a>
                        </li>
                        <li class="item-12" itemprop="name">
                            <p id="copyright"> © 2018 orient.travel</p>
                        </li>
                    </ul>
                </div>
                <div class="footer-dest">
                    <ul class="footer2 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-1 parent" itemprop="name">
                            <a itemprop="url" href="/{{App::getLocale()}}/armenia" >@lang('home.armenia')</a>
                        </li>
                        <li class="item-2" itemprop="name">
                            <a itemprop="url" href="/{{App::getLocale()}}/georgia" >@lang('home.georgia')</a>
                        </li>
                        <li class="item-3" itemprop="name">
                            <a itemprop="url" href="/{{App::getLocale()}}/iran" >@lang('home.iran')</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-dest">
                    <ul class="footer3 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-4 parent" itemprop="name">
                            <a itemprop="url" href="/{{App::getLocale()}}/tajikistan" >@lang('home.tajikistan')</a>
                        </li>
                        <li class="item-5" itemprop="name">
                            <a itemprop="url" href="/{{App::getLocale()}}/turkmenistan" >@lang('home.turkmenistan')</a>
                        </li>
                        <li class="item-6" itemprop="name">
                            <a itemprop="url" href="/{{App::getLocale()}}/kazakhstan" >@lang('home.kazakhstan')</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-dest">
                    <ul class="footer4 menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="item-7 parent" itemprop="name">
                            <a itemprop="url" href="/{{App::getLocale()}}/mongolia" >@lang('home.mongolia')</a>
                        </li>
                        <li class="item-8" itemprop="name">
                            <a itemprop="url" href="/{{App::getLocale()}}/uzbekistan" >@lang('home.uzbekistan')</a>
                        </li>
                        <li class="item-9" itemprop="name">
                            <a itemprop="url" href="/{{App::getLocale()}}/kyrgyzstan" >@lang('home.kyrgyzstan')</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-logos"> 
                    <div class="logos">
                        <a target="_blank" href="http://route-de-la-soie.com/"><img src="/images/silk_logo.png" alt="silk road tour"></a>
                    </div>
                    <div class="logos">
                        <a target="_blank" href="http://voyage-en-armenie.com/fr/"><img src="/images/armenia_logo.png" alt="armenia tour"></a>
                    </div>
                </div>  
            </div>
        </div>

    </footer>

</body>

</html>