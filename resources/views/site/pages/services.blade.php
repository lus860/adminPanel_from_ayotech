@extends('site.layouts.app')
@section('content')
    <div class="maincontent">
        <div class="container">
            <h2 style="color:white;">{{$page->title}}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">{{t('site.Գլխավոր')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container ptb-40">
        <div class="row text-center services justify-content-center mb-0" data-aos="zoom-in">

            @foreach($services as $s)


                <div class="col-md-4 pt-sm-2 pt-2 pt-lg-0 ">
                    <div
                        class="homepage-item services-section {{ ($loop->index%2 == 0)?'services-section-odd':'services-section-even' }}">
                        <div class=" position-relative d-block active text-center">
                            <div class="circle">
                                <div class="icon-box">
                                    <a href="{{ route('services', ['url'=>$s->url]) }}">
                                        <img src="{{ asset('u/services/'.$s->image)}}" class="services_icon" alt="{{$page->title}}"></a>
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
                        <a href="{{ route('services', ['url'=>$s->url]) }}" class="services-section-text homepage-item"><span>{{ $s->title}}</span>
                        </a>

                    </div>
                </div>
            @endforeach


        </div>


    </div>

@endsection
