@extends('admin.pages.banners.layout')
@section('title', 'Контент страницы брониривания')
@php $back_url = route('admin.pages.main') @endphp
@section('body')
    @bannerBlock(['title'=>'Контент'])
    <div class="row">
        <div class="col-12 col-dxl-6">
            @card(['title'=>'Информационный блок'])
            @banner('content.image', 'Фоновое изоброжение блока (1920 X 1180)')
            @banner('content.title', 'Заголовок блока')
            @banner('content.text_top', 'Верхний текст блока')
            @banner('content.text_bottom', 'Нижний текст блока')

            @endcard
        </div>

    </div>

    @endbannerBlock
@endsection
