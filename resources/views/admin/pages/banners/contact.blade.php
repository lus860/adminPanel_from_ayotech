@extends('admin.pages.banners.layout')
@section('title', 'Контент страницы контакта')
@php $back_url = route('admin.pages.main') @endphp
@section('body')
    @bannerBlock(['title'=>'Контент'])
        <div class="row">
            <div class="col-12 col-dxl-6">
                @card(['title'=>'Блок'])
                @banner('content.title', 'Название блока')
{{--                @banner('content.text', 'Текст после названии')--}}
{{--                @banner('content.contact_title', 'Название второго блока')--}}
                @endcard
            </div>
            <div class="col-12 col-dxl-6">
                @card(['title'=>'Блок изображения'])
                                @banner('content.image', 'Изображение 1440х500')
                @endcard
            </div>
        </div>
    @endbannerBlock
@endsection
