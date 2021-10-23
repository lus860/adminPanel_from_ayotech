@extends('site.layouts.app')
@section('slider')
    <div class="top_banner about_top_banner"
         style="background-image: url('{{asset('u/banners/'.$banners->content[0]->image)}}')"></div>
@endsection
@section('content')


    <secction>
        <div class="container">
            <div class="about-us-info">
                <div class="about-us-info_block d_flex j_content_between a_items_start">
                    <div class="about-us-info__box">
                        <div class="about-us-title">
                            <h1>{{$banners->content[0]->title}}</h1>
                        </div>
                        <div>
                            {!! $banners->content[0]->content !!}
                        </div>
                    </div>
                    <div class="about-us-info__img img-setting"
                         style="background-image: url({{asset('u/banners/'.$banners->content[0]->image1)}})">
                        <div class="about-us-info__fon">

                        </div>
                    </div>
                </div>
                <div class="about-us-info__content">
                    <div class="about-us-info__content__block d_flex j_content_between f_wrap">
                        @if(!empty($pages))
                            @foreach($pages as $page)
                                <a href="{{route('page', ['url'=>$page->url])}}">
                                    <div class="about-us-info__content__img">
                                        <img src="{{asset('u/pages/'.$page->image??null)}}" alt="jpg">
                                    </div>
                                    <div class="about-us-title">
                                        <h2> {{$page->title}}</h2>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </secction>


@endsection
