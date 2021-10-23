@extends('site.layouts.app')
@section('content')

<div class="maincontent">
    <div class="container">
        <h2 style="color:white;">  {{$current_page}} </h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">{{t('site.Գլխավոր')}}</a></li>
                <li class="breadcrumb-item"><a href="/news">  {{$current_page}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$item->title}}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container newscontent">
     <section class="row mt-5 custom-mb-10 justify-content-center">

        <div class="col-11 p-3  box-shadow white-bg">
            <div  class="position-relative mb-2"  style="width: fit-content;">
                <img src="/u/news/date.png" alt="{{$item->title}}">
                <date class="position-absolute ml-2" style="color:white; left:0;">{{$item->created_at->format('d.m.Y')}}</date>
            </div>

            <h6>
                {{$item->title}}
            </h6>
        </div>
    </section>
    <section class="mt-5 w-100" >

        <img src="{{'/u/news/'.$item->image}}" class="img-fluid " alt="{{$item->title}}">
    </section>
    <section class="row  custom-mt-10 justify-content-center">
        <div class="col-11 p-3  box-shadow white-bg">
            {!! $item->description !!}
        </div>
    </section>

@if(count($gallery))
    <section class="p-3 mt-5" >
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
            <div class=" swiper-wrapper  flex-nowrap flex-xl-wrap disabled">
                @foreach($gallery as $image)
                <div class="swiper-slide col-3 px-1 py-2"><a href="{{asset('u/gallery/'.$image->image)}}"
                                                             data-fancybox="gallery">
                        <img class="img-fluid"  src="{{asset('u/gallery/thumbs/'.$image->image)}}" alt="{{$item->title}}" />
                    </a>
                </div>
                @endforeach

            </div>
            <div class="text-center swiper-pagination3"></div>

        </div>

    </section>
@endif
     @if(!empty($video_gallery) && count($video_gallery))

        <section class="p-3 mt-5" >
            <div class="row pl-3">
                <div class="title_services green col-md-12"> {{t('site.Վիդեոդարան')}}</div>
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
                <div class=" swiper-wrapper  flex-nowrap flex-xl-wrap disabled">

                        @foreach($video_gallery as $video)
                            <div class="col-md-3   pt-sm-1 pt-2 col-sm-6 col-12">
                                <div class="videoiframe youtube" data-embed="{{$video->video}}">
                                    <div class="play-button"></div>
                                </div>
                            </div>
                        @endforeach


                </div>
                <div class="text-center swiper-pagination3"></div>

            </div>

        </section>


    @endif
    <div class="d-flex justify-content-end my-5">
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
@push('js')
    <script>
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
@endpush

@endsection

