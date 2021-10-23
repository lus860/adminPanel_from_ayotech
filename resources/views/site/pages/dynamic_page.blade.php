

@extends('site.layouts.app')
@section('content')


<div class="maincontent">
    <div class="container">
        <h3 style="color:white;">{{$page->title}}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">{{t('site.Գլխավոր')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container">
    <section class="    mt-5 w-100" >

        <h3>{{$page->title}}</h3>
        <br>
     @if(!empty($page->image))
        <img src="{{asset('u/pages/'.$page->image)}}" class="img-fluid " alt="{{$page->title}}">
         @endif
    </section>
    @if(!empty($page->content))
    <section class="row  custom-mt-10 justify-content-center">
        <div class="col-11 p-3  box-shadow white-bg">
            {!! $page->content !!}
        </div>
    </section>
    @endif

    <section class="p-3 mt-5 box-shadow" >
        <div class="row pl-3">
            <div class="title_services green col-md-12">{{t('site.Տեսադարան')}}</div>
            <div class="col-8 pl-0">
                <div class="drop_drop"  style="justify-content: left;">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="row swiper-container swiper3">
            <!-- Swiper -->
            <div class=" swiper-wrapper  flex-nowrap flex-xl-wrap ">
                @foreach($gallery as $image)
                    <div class="swiper-slide px-1 py-2">
                    <a href="{{asset('u/gallery/'.$image->image)}}" data-fancybox="gallery"
                       class="gallery-item-show fancy_open">
                        <img class="img-fluid" src="{{asset('u/gallery/thumbs/'.$image->image)}}" alt="{{$page->title}}">
                    </a>
                    </div>
                @endforeach
                          </div>
            <div class="text-center swiper-pagination3"></div>

        </div>
    </section>
    <section class="p-3 mt-5 mb-5 box-shadow">
        <div class="row pl-3">
            <div class="title_services green col-md-12">{{t('site.Տեսանյութ')}}</div>
            <div class="col-8 col-xs-6 pl-0">
                <div class="drop_drop" style="    justify-content: left;">

                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="row p-2 pt-3 ">
             <iframe src="{{$page->youtubeEmbed}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
    <section class="mt-5 mb-5 ">
        <div class="row">
            <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
            <div class="col-xl-5 col-lg-5 col-sm-12 col-xs-12 pl-0 ">
                <div class="contact-facebook position-relative " data-layout="button_count">
                    <input type="button" value="Share" style="position:absolute; opacity: 0; cursor:pointer; z-index:9; height:100%; width: 100%" onclick="share();">
                    <div class="facebook-item position-relative d-block active text-center">
                        <div class="icon-box">
                            <div class=" align-items-center d-flex btn-facebook" >
                                <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="25pt"height="25pt" viewBox="0 0 51 51.002">
                                          <path id="Exclusion_1" data-name="Exclusion 1" d="M24.738,51H5.312A5.318,5.318,0,0,1,0,45.688V5.312A5.318,5.318,0,0,1,5.312,0H45.688A5.318,5.318,0,0,1,51,5.312V45.688A5.318,5.318,0,0,1,45.688,51H33.239V31.875h5.312a1.063,1.063,0,0,0,1.007-.727l2.125-6.375a1.062,1.062,0,0,0-.673-1.343,1.04,1.04,0,0,0-.334-.055H33.239V18.062a3.191,3.191,0,0,1,3.187-3.187h4.251a1.064,1.064,0,0,0,1.063-1.063V7.438a1.065,1.065,0,0,0-1.063-1.063H36.426A11.7,11.7,0,0,0,24.738,18.062v5.313H19.426a1.064,1.064,0,0,0-1.063,1.063v6.375a1.064,1.064,0,0,0,1.063,1.063h5.312V51Z" fill="#fff"/>
                                        </svg>
                                </span>
                                <span class="facebook-share-btn">
                                    {{t('site.Կիսվել Facebook - սոցիալական ցանցում')}}
                          </span>
                                <span class="media-facebook-share-btn">
                                 {{t('site.Կիսվել')}}
                             </span>
                            </div>
                        </div>
                        <div class="hover-icon">
                            <div class="iconcircle"></div>
                            <div class="iconcircle"></div>
                            <div class="iconcircle"></div>
                            <div class="iconcircle"></div>
                            <div class="iconcircle"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('js')
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v8.0" nonce="usoTrFvE"></script>
    @endpush
    @push('css')
    <style>
        iframe{
            width:100%;
            height:768px;
        }
        @media only screen and (max-width:1024px){
            iframe{
                width:100%;
                height:400px;
            }
        }
        @media only screen and (max-width: 667px){
        iframe{
            width:100%;
            height:200px;
        }
        }
    </style>
    @endpush

@push('js')
    <script>
        function sliderInit() {

            if ($(window).width() < 1185) {


                $('.swiper3').find('.swiper-wrapper').removeClass("disabled");
                $('.swiper-pagination3').show();
                var swiper3 = new Swiper('.swiper3', {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    pagination: {
                        el: '.swiper-pagination3',
                        clickable: true,
                    },
                    breakpoints: {
                        428: {
                            slidesPerView: 1,
                            spaceBetween: 0,
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 0,
                        },
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 0,
                        }
                    }
                });

            } else {


                $('.swiper3').find('.swiper-wrapper').addClass("disabled");

                $('.swiper-pagination3').hide();

                $('.s3').find('.swiper-wrapper').addClass("disabled");

                $('.swiper-paginations3').hide();


            }

        }

        sliderInit();

        $(window).on('resize', function () {
            sliderInit();
        })

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        function share() {

            var width = 626;
            var height = 436;
            var yourPageToShare = location.href;
            var sharerUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(yourPageToShare);
            var l = window.screenX + (window.outerWidth - width) / 2;
            var t = window.screenY + (window.outerHeight - height) / 2;
            var winProps = ['width='+width,'height='+height,'left='+l,'top='+t,'status=no','resizable=yes','toolbar=no','menubar=no','scrollbars=yes'].join(',');
            var win = window.open(sharerUrl, 'fbShareWin', winProps);
        }
        // AOS.init();


    </script>


    </script>







@endpush



























