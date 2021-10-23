@extends('site.layouts.app')
@section('content')
<div class="maincontent">
    <div class="container">
        <h3 class="white">{{$page->title}}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="#">{{t('site.Գլխավոր')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$page->title}} </li>
            </ol>
        </nav>
    </div>
</div>

<div class="container">
    <section class="picture-and-video-section ptb-40">

        <ul class=" tabs nav nav-pills mb-3 mt-0" id="pills-tab" role="tablist">
            <div class="selector"></div>
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">{{t('site.Ֆոտոդարան')}}</a>
                <span class="dot"></span>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">{{t('site.Վիդեոդարան')}}</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                <div class="imglist  row p-2">

                    @foreach($gallery as $image)
                    <div class=" col-lg-3 col-md-4 col-6  px-1 py-2">

                        <a href="{{asset('u/gallery/'.$image->image)}}"    data-fancybox="gallery">
                            <img class="w-100" src="{{asset('u/gallery/thumbs/'.$image->image)}}" alt="{{$page->title}} ">
                        </a>
                    </div>
                    @endforeach

                </div>

            </div>



            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">

                  @foreach($video_gallery as $video)
                        <div class="col-md-3   pt-sm-1 pt-2 col-sm-6 col-12">
                            <div class="videoiframe youtube" data-embed="{{$video->video}}">
                                <div class="play-button"></div>
                            </div>
                        </div>

                    @endforeach

                </div>
             </div>
        </div>

    </section>
</div>
@endsection
@push('js')
{{--    <script>--}}
{{--        lightGallery(document.getElementById('aniimated-thumbnials'), {--}}
{{--            thumbnail:true--}}
{{--        });--}}
{{--    </script>--}}
    @endpush
@push('css')
    <style>
.picture-and-video-section .nav-pills .nav-link.active {
    background-color: {{$info->header_info->color}};
}
    </style>
@endpush



