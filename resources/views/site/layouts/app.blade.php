<!doctype html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(!empty($noindex))
        <meta name="robots" content="noindex"> @endif
    <meta name="HandheldFriendly" content="true">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
     {{--    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">--}}

    {{--    @if(!empty($seo['title']))--}}
    {{--        <title>{{ $seo['title']}}</title>--}}
    {{--    @else--}}
    {{--        <title>{{t('site.title') }}</title>--}}
    {{--    @endif--}}

    {{--    @if(!empty($seo['keywords']))--}}
    {{--        <meta name="keywords" content="{{ $seo['keywords'] }}">--}}
    {{--    @endif--}}
    {{--    @if(!empty($seo['description']))--}}
    {{--        <meta name="description" content="{{ $seo['description'] }}">--}}
    {{--    @else--}}
    {{--        <meta name="description" content="{{t('site.Թոքաբանության ազգային կենտրոն ՊՈԱԿ') }}">--}}
    {{--    @endif--}}
    {{--    <meta property="og:title" content="{{t('site.Թոքաբանության ազգային կենտրոն ՊՈԱԿ') }} ">--}}


    {{--    @if(!empty($ogdesc))--}}
    {{--        <meta property="og:description" content="{{ strip_tags( $ogdesc) }}"/>--}}
    {{--    @else--}}
    {{--        <meta property="og:description" content="{{$info->header_info->title2}}"/>--}}
    {{--    @endif--}}
    {{--    @if(!empty($page) && $page->static == 'home')--}}
    {{--        <meta property="og:url" content="{{$page->url}}"/>--}}
    {{--        <meta property="og:image" content="{{asset('u/main_slider/'.$gallery->first()->image)}}"/>--}}
    {{--    @elseif(!empty($ogimage))--}}
    {{--        <meta property="og:image" content="{{asset($ogimage)}}"/>--}}
    {{--    @else--}}
    {{--        <meta property="og:image" content="{{aSite('img/ogg.jpg')}}"/>--}}
    {{--    @endif--}}
    {{--    <meta property="og:url" content="www.pulmonology.am">--}}
    {{--    <meta property="og:image:width" content="400"/>--}}
    {{--    <meta property="og:image:height" content="300"/>--}}
    {{--    <link rel="stylesheet preload" as="style" href="{{aApp('fancybox/fancybox.css')}}">--}}
    {{--    <link rel="stylesheet preload" as="style" href="{{ aSite('css/vivify.min.css') }}">--}}
    <link rel="stylesheet preload" as="style" href="{{aApp('font-awesome-4.7.0/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ aSite('css/style.css') }}">
    <link rel="stylesheet " href="{{ aSite('css/bootstrap.min.css') }}">
    <link rel="stylesheet preload" as="style" href="{{ aSite('css/swiper.min.css') }}">
    <link rel="stylesheet preload" as="style" href="{{ aSite('font/font.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    @stack('css')

</head>
<body>
<header class="header">

    <nav class="navbar navbar-expand-lg fixed-top py-2">
        <div class="container">
            <div class="d-flex w-100 justify-content-center flex-column ">
                <div class=" d-flex justify-content-between border-bottom-1 pb-2 sticky">
                    <div ><a href="tel: +37493 00 00 00" class="text-white"><i class="fa fa-phone" aria-expanded="true"></i> +37493 00 00 00</a></div>
                    <div class="d-flex" >
                        <a href=""  class="text-white mx-2"><i class="fa fa-facebook"></i></a>
                        <a href=""  class="text-white mx-2"><i class="fa fa-instagram"></i></a>
                        <a href=""  class="text-white mx-2">   <i class="fa fa-facebook"></i></a>
                    <div class="border-left-1 cursor-pointer mx-2 pl-2"><div class="dropdown">
                            <div type="button" class="text-white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>{{ app()->getLocale() }}</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach($languages as $lang)
                                    <a href="{{ url(\LanguageManager::getUrlWithLocale($lang->iso)) }}">
                                        @if($lang->iso == 'hy')
                                            {{$lang->iso}}
                                        @elseif($lang->iso == 'ru')
                                            {{$lang->iso}}
                                        @else
                                            {{$lang->iso}}
                                        @endif
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div></div>
                </div>
                <div class="row w-100 ">
                    <div class="col-3 p-0">
                        <a href="{{route('page')}}">
                            <img src="{{asset('u/banners/'.$info->data[0]->header_logo)}}"  alt="{{$info->header_info->title1}}" class="img-responsive logo1">
                            <img    src="{{asset('u/banners/'.$info->data[0]->menu_logo)}}" alt="{{$info->header_info->title1}}" class="img-responsive logo2 d-none">
                        </a>
                    </div>
                    <div class="col-9 d-flex  align-items-center">
                        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation"
                                class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

                        <div id="navbarSupportedContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav ml-auto">
                                @foreach($menu_pages as $page)
                                    @if(count($page->childes))
                                        <li class="nav-item sidenav__block">
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                               aria-expanded="false" data-toggle="dropdown" aria-haspopup="true"
                                               href="#">{{$page->title}}</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                                 style="background: {{$info->header_info->color}}">
                                                @foreach($page->childes as $sub)
                                                    <a class="dropdown-item"
                                                       href="{{ route('page', ['url'=>$sub->static==$homepage?null:$sub->url]) }}">{{$sub->title}}</a>
                                                @endforeach
                                            </div>
                                        </li>
                                    @else
                                        <li class='nav-item sidenav__block p-2'>
                                            <a class="nav-link {{(($current_page??null) === $page->id)? 'is-active':null }}"
                                               href="{{ route('page', ['url'=>$page->static==$homepage?null:$page->url]) }}">{{ $page->title }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <form class="navbar-form" role="search">
                                <div class="input-group search" >
                                    <input type="text" class="d-none form-control" placeholder="Search" name="q">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>                        </div>
                        <div class="icons-lang">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!--====================-header-html-end-===================-->

<!--====================-content-===================-->
@yield('content')
<!--====================-content-end-===================-->


<footer class="my_footer fixed-bootom " style="
    margin-top: 373px;
">
    <div class="container-fluid light-grey   ">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3  col-6">
                    <!--Column1-->
                    <div class="footer-pad">
                        <h2 class="font-weight-600">{{t('site.Բաժիններ')}}</h2>
                        <ul class="list-unstyled">
                            @foreach($footer_pages as $page)
                                <li class='{{ (($current_page??null)===$page->id)?'is-active':null }}'>
                                    <a href="{{ route('page', ['url'=>$page->static==$homepage?null:$page->url]) }}">{{ $page->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3  col-6">
                    <!--Column1-->
                    <div class="footer-pad">
                        <h2 class="font-weight-600">{{t('site.Օգտակար հղումներ 1')}}</h2>
                        <ul class="list-unstyled">
                            @if(!empty($info->footer_1))
                                @foreach($info->footer_1 as $f1)
                                    <li><a href="{{$f1->url}}">{{$f1->title}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3  col-6">
                    <!--Column1-->
                    <div class="footer-pad">
                        <h2 class="font-weight-600">{{t('site.Օգտակար հղումներ 2')}}</h2>
                        <ul class="list-unstyled">
                            @if(!empty($info->footer_2))
                                @foreach($info->footer_2 as $f2)
                                    <li><a href="{{$f2->url}}">{{$f2->title}}</a></li>
                                @endforeach
                            @endif
                        </ul>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-6">
                    {{--                    <!--Column1-->--}}
                    <div class="footer-pad">
                        <h2 class="font-weight-600">{{t('site.Օգտակար հղումներ 3')}}</h2>

                        <ul class="list-unstyled">
                            @if(!empty($info->footer_3))
                                @foreach($info->footer_3 as $f3)
                                    <li><a href="{{$f3->url}}">{{$f3->title}}</a></li>
                                @endforeach
                            @endif
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid foot_bottom">
        <div class="row">
            <span class="text-center">{{$info->footer_info->copyright}}</span>
        </div>
    </div>
</footer>
<!--====================-footer-html-end-===================-->

@js(aSite('js/jquery-3.2.1.min.js'))
<script src="{{aApp('fancybox/fancybox.js')}}"></script>
{{--<script src="{{aSite('js/swiper.min.js')}}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/maphilight/1.4.0/jquery.maphilight.min.js"></script>
<script src="https://raw.githubusercontent.com/davidjbradshaw/imagemap-resizer/master/js/imageMapResizer.min.js"></script>
<script src="{{aSite('js/script.js')}}"></script>
<script src="{{aSite('js/bootstrap.min.js')}}"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
@stack('js')

</body>
</html>
