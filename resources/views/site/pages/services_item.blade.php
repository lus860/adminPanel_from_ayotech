@extends('site.layouts.app')
@section('content')
     <div class="maincontent">
        <div class="container">
            <h2 style="color:white;">{{$services->title}}</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">{{t('site.Գլխավոր')}}</a></li>
                    <li class="breadcrumb-item"><a href="/services">{{t('site.Ծառայություններ')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$services->title}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container" id="section-info">
        <section class="pt-4">
            <div class="row">
                <div class="col-lg-12  col-12">
                    {!! $services->description !!}
                </div>
            </div>
        </section>
        <section class="p-3 mt-5 mb-5 " style="box-shadow: 0px 0px 13px 0px #bbbabab8;     border-radius: 3px;">
            <div class="tabeffect">
                <ul class="nav  mb-3" id="pills-tab" role="tablist">
                    @foreach($sub_services as $sub)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->first ? 'active' : '' }}" id=""  data-toggle="pill"
                               href="#{{ 'sub'.$sub->id }}" role="tab"
                               aria-controls="pills-home" aria-selected="true">{{$sub->title}}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    @foreach($sub_services as $sub)
                        <div class="tab-pane fade {{ $loop->first ? 'show ' : ''}}active m-4" id="{{ 'sub'.$sub->id }}"
                             role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <table class="table  ">
                                <tbody>
                                @foreach($sub->option as $option)
                                    <tr>
                                        <td style="width: 84.44%">{{$option->title}}</td>
                                        <td style="width: 16.66%; vertical-align: middle">{{$option->price}}
                                            <span style="font-family: auto;">֏ </span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="colapseeffect d-none">
                <div id="accordion">
                    @foreach($sub_services as $sub)


                        <div class="card">
                            <div class=" card-header" id="headingOne" data-toggle="collapse"
                                 data-target="#collapse{{$sub->id}}"
                                 aria-expanded="true" aria-controls="collapse{{$sub->id}}">
                                <button class="btn btn-link">
                                    {{$sub->title}}
                                </button>
                                <span class="top-bottom" style="float: right;  padding-top: 7px;">
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                        </span>
                            </div>
                            <div id="collapse{{$sub->id}}" class="collapse {{ $loop->first ? 'show ' : ''}} "
                                 aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <table class="table  ">
                                        <tbody>
                                        @foreach($sub->option as $option)
                                            <tr>
                                                <td style="width: 84.44%">{{$option->title}}</td>
                                                <td style="width: 16.66%;">{{$option->price}}  <span style="font-family: auto;">֏ </span></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>
            </div>
        </section>
    </div>


@endsection
@push('css')
    <style>
        #section-info .nav-item > .active {
            color: {{$info->header_info->color}};
            border-bottom: solid 3px{{$info->header_info->color}};
        }
        #section-info .nav-item > a:hover {
            color: {{$info->header_info->color}};
        }

    </style>

@endpush
