@extends('admin.pages.banners.layout')
@section('title', 'Контент страницы о нас')
@php $back_url = route('admin.pages.main') @endphp
@section('body')
    @bannerBlock(['title'=>'Контент'])
        <div class="row">
            <div class="col-12 col-dxl-6">
                @card(['title'=>'Контент'])
                @banner('content.title', 'Название блока')
                @banner('content.content', 'Текст')
                @endcard
            </div>
            <div class="col-12 col-dxl-6">
                @card(['title'=>'Контент1'])
                @banner('content.content1', 'Текст')
                @endcard
            </div>
            <div class="col-12 col-dxl-6">
{{--                @card(['title'=>'Изоброжение заголовка'])--}}
{{--                    @banner('content.image', 'Изоброжение (рек шир. 1920)')--}}
{{--                @endcard--}}
                @card(['title'=>'Изоброжение'])
                    @banner('content.image1', 'Изоброжение контента (580 X 550)')
                @endcard
            </div>
        </div>
    @endbannerBlock
@endsection
