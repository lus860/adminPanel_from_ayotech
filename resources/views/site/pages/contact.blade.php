@extends('site.layouts.app')
@section('content')
    <div class="maincontent">
        <div class="container">
            <h3 class="contact white">{{ $page->title }}</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">{{t('site.Գլխավոր')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>

                </ol>
            </nav>
        </div>
    </div>

    @if(count($errors))
        <div class="alert alert-danger">
            <p><strong> {{ t('site.Դուք ունեք սխալներ') }}</strong></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @elseif(session('message_sent'))
            <div class="alert alert-success">{{t('site.Ձեր առաջարկը հաջողությամբ ուղարկվեց')}}</div>
        @endif



    <div class="container">
        <section class="pt-4">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6  pt-2 p-l-r-10">
                    <div class="col-12 info_card h-100">
                            <span class="title">
                              {{t('site.address')}}
                            </span>
                        <br>
                        <span class="info1">
                                 {{$info->footer_info->address}}
                            </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6  pt-2  p-l-r-10">
                    <div class="col-12 info_card h-100">
                            <span class="title">
                                {{t('site.email')}}
                            </span>
                        <br>
                        <span class="info1">
                                <a href="mailto:{{$info->footer_info->email}}">{{$info->footer_info->email}} </a>
                            </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6  pt-2  p-l-r-10">
                    <div class="col-12 info_card h-100">
                            <span class="title">
                               {{$info->footer_info->title1}}
                            </span>
                        <br>
                        <span class="info1">
                             <a href="tel:{{$info->footer_info->director_reception}}">{{$info->footer_info->director_reception}}</a>
                            </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pt-2  p-l-r-10">
                    <div class="col-12 info_card h-100">
                            <span class="title">
                               {{$info->footer_info->title2}}
                            </span>
                        <br>
                        <span class="info1">
                                <a href="tel:{{$info->footer_info->informer}}">{{$info->footer_info->informer}}</a>
                            </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6  pt-2  p-l-r-10">
                    <div class="col-12 info_card h-100">
                            <span class="title">
                              {{$info->footer_info->title3}}
                            </span>
                        <br>
                        <span class="info1">
                                 <a href="tel:{{$info->footer_info->human_resources}}">{{$info->footer_info->human_resources}}</a>
                            </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6  pt-2  col-xs-6 p-l-r-10">
                    <div class="col-12 info_card h-100">
                            <span class="title">
                              {{$info->footer_info->title4}}
                            </span>
                        <br>
                        <span class="info1">
                            <a href="tel:{{$info->footer_info->accounting}}">{{$info->footer_info->accounting}}</a>
                            </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6  pt-2  col-xs-6 p-l-r-10">
                    <div class="col-12 info_card h-100">
                            <span class="title">
                                   {{$info->footer_info->title5}}
                            </span>
                        <br>
                        <span class="info1">
                          <a href="tel:{{$info->footer_info->national_reference}}">{{$info->footer_info->national_reference}}</a>
                            </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pt-2  col-xs-6 p-l-r-10">
                    <div class="col-12 info_card h-100">
                            <span class="title">
                                {{$info->footer_info->title2}}
                            </span>
                        <br>

                        <span class="buttons ">
                                 @foreach($info->socials as $social)
                                @if($social->url)

                              <a href="{{$social->url}}" class="contact_social pt-1">
                                            <img class="img-fluid" src="{{ $social->icon() }}" alt="{{$page->title}}">
                                        </a>
                                @endif
                            @endforeach
                            </span>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5 mb-5">
            <div class="row">
                <div class="col-md-6 col-lg-6  pt-2  col-xs-12 p-l-lg-5 p-l-0">
                    <div class="contact_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3043.7873388773496!2d44.616634!3d40.280474!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406a9f7dfa6bfdd3%3A0x16c48eb5e9716a54!2zMTAgQXJ6bmkgSGlnaHdheSwgQWJvdnlhbiAyMjA0LCDQkNGA0LzQtdC90LjRjw!5e0!3m2!1sru!2sus!4v1596997749675!5m2!1sru!2sus" height="522" frameborder="0" style="border:0; margin: 0 auto; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 contact_form p-r-lg-5 p-r-0">
                    <!--<div class="contact_form">-->
                    <form method="post" action="{{route('contacts.send_mail')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">
                                *  {{t('site.name_surname')}}
                            </label>
                            <input class="border_bottom" name="name"  type="text"  required />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                *  {{t('site.email')}}
                            </label>
                            <input class="border_bottom" name="email" type="email" required  />
                        </div>
                        <div class="form-group">
                            <label for="phone">
                                  {{t('site.phone')}}
                            </label>
                            <input class="border_bottom" name = 'phone' type="number"  id="phone"/>
                        </div>
                        <div class="form-group">
                            <label for="name">
                                 {{t('site.Theme`')}}
                            </label>
                            <input class="border_bottom" name="theme" type="text"  />
                        </div>
                        <div class="form-group">
                            <label for="name">
                                 {{t('site.message')}}
                            </label>
                            <textarea class="border_bottom" name="message" ></textarea>
                        </div>
                        <span class="required_info">
                                  * {{t('site.required fields')}}
                                </span>
                        <br>
                        <div class="col-md-12 text-right">
                            <button type="submit" class="contact_submit mt-4">
                        {{t('site.send')}}
                            </button>
                        </div>
                    </form>
                    <!--</div>-->
                </div>
            </div>
        </section>
    </div>
@endsection
@push('js')
    <script>
        $('input').click(function(){
            $('.border_bottom ').removeClass('border-color-green');
            $(this).toggleClass('border-color-green');
        })
       $('textarea').click(function(){
            $('.border_bottom ').removeClass('border-color-green');
            $(this).toggleClass('border-color-green');
        })

    </script>
    @endpush

