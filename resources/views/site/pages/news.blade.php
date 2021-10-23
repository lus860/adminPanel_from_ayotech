@extends('site.layouts.app')
@section('content')

            <div class="maincontent">
                <div class="container">
                    <h3 class="contact white">{{$page->title}}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">{{t('site.Գլխավոր')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="container vivify delay-100 popIn   ">
                <section class="p-3 mt-5 news-section">


                    <div class="row pt-3">
                        @if(!empty($items))
                            @foreach($items as $new)

                        <div class="col-xl-3 col-lg-4  col-sm-6 col-xs-12 p-1 mb-5  ">
                            <div class="card" >
                                <div class="position-relative">
                                    <img src="{{'/u/news/'.$new->image_cover}}" class="card-img-top" alt="{{$page->title}}">
                                    <div class="position-absolute b-0 l-0 ">
                                        <div class="">
                                            <img src="/u/news/date.png" style="height: 100%;width: 100% "  class="position-absolute data-img-bottom" alt="{{$page->title}}">
                                            <div class="position-relative "><h5 class="mb-0" style="color:white;">{{$new->created_at->format('d.m.Y')}}</h5></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="{{'news/'.$new->url}}" class="dec-none">   <h6 class="card-title"><b>{{$new->title}}</b> </h6 ></a>
                                    <p class="card-text">{{$new->short}}</p>
                                    <a href="{{'news/'.$new->url}}" class="green  float-right"><b>{{t('site.Կարդալ ավելին')}}</b></a>
                                </div>
                            </div>
                        </div>
                            @endforeach
                            @endif

                    </div>
                </section>


            </div>
@endsection
