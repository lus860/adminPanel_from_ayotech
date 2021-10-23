@extends('admin.pages.banners.layout')
@section('title', 'Контент главной страницы')
@php $back_url = route('admin.pages.main') @endphp
@section('body')
    @bannerBlock(['title'=>"Баннер После Слайдера"])
    <div class="row">
        <div class="col-12 col-dxl-6">
            @card(['title'=>'Контент'])
            @banner('main_banner.title', 'Название')
            @banner('main_banner.desc', 'Текст')
            @banner('main_banner.second_title', 'Нижний Заголовок')
            @endcard
        </div>
        <div class="col-12 col-dxl-6">
            @card
            @banner('main_banner.image', 'Изоброжение 1:1(мин. 300)')
            @endcard
        </div>
        </div>
    @endbannerBlock

{{--    @bannerBlock(['title'=>'Продукты'])--}}
{{--    <div class="row">--}}
{{--        <div class="col-12 col-dxl-6">--}}
{{--            @card(['title'=>'Контент'])--}}
{{--            @banner('titles.most_sold', 'Название')--}}
{{--            @endcard--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endbannerBlock--}}
{{--    @bannerBlock(['title'=>'Второй банер'])--}}
{{--    <div class="row">--}}
{{--        <div class="col-12 col-dxl-6">--}}
{{--            @card(['title'=>'Контент'])--}}
{{--            @banner('delivery.top_text', 'Верхный Текст')--}}
{{--            @banner('delivery.bottom_text', 'Нижный текст')--}}
{{--            @banner('delivery.title1', 'Название')--}}
{{--            @banner('delivery.url1', 'Ссылка')--}}
{{--            @banner('delivery.title2', 'Название')--}}
{{--            @banner('delivery.url2', 'Ссылка')--}}
{{--            @banner('delivery.title3', 'Название')--}}
{{--            @banner('delivery.url3', 'Ссылка')--}}
{{--            @banner('delivery.title4', 'Название')--}}
{{--            @banner('delivery.url4', 'Ссылка')--}}

{{--            @endcard--}}
{{--        </div>--}}
{{--        <div class="col-12 col-dxl-6">--}}
{{--            @card(['title'=>'Фоновое Изоброжение для второго баннер'])--}}
{{--            @banner('delivery.image', 'Изоброжение (1920)')--}}
{{--            @endcard--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @endbannerBlock--}}
{{--    @bannerBlock(['title'=>'Третий банер'])--}}
{{--    <div class="row">--}}
{{--        <div class="col-12 col-dxl-6">--}}
{{--            @card(['title'=>'Контент'])--}}
{{--            @banner('about.title', 'Название')--}}
{{--            @banner('about.desc', 'Текст')--}}
{{--            @banner('about.url', 'Ссылка')--}}
{{--            @banner('about.title1', 'Название для ссылки')--}}
{{--            @banner('about.image1', 'Изоброжение (645 X 435)')--}}
{{--            @endcard--}}
{{--        </div>--}}
{{--        <div class="col-12 col-dxl-6">--}}
{{--            @card(['title'=>'Изоброжение'])--}}
{{--            @banner('about.image', 'Изоброжение (830 X 930)')--}}

{{--            @endcard--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endbannerBlock--}}
{{--    @bannerBlock(['title'=>'Новости'])--}}
{{--    <div class="row">--}}
{{--        <div class="col-12 col-dxl-6">--}}
{{--            @card(['title'=>'Контент'])--}}
{{--            @banner('titles.news', 'Название')--}}
{{--            @endcard--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endbannerBlock--}}
@endsection
