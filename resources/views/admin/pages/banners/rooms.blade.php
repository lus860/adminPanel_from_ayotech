@extends('admin.pages.banners.layout')
@section('title', 'Контент страницы Комнат')
@php $back_url = route('admin.pages.main') @endphp
@section('body')
    @bannerBlock(['title'=>'Контент'])
    <div class="row">
        <div class="col-12 col-dxl-6">
            @card(['title'=>'Изоброжение'])
                @banner('content.image', 'Изоброжение (рек шир. 1920)')
                @banner('content.title', 'Заголовок для верхнего изоброжения')
                @banner('content.desc', 'Заголовок для контента')
            @endcard
        </div>
        <div class="col-12 col-dxl-6">
            @card(['title'=>'Bлока на главной'])
                @banner('home.title', 'Заголовок для блока на главной')
                @banner('home.desc', 'Тек для блока на главной')
            @endcard
        </div>
    </div>
    @endbannerBlock
@endsection