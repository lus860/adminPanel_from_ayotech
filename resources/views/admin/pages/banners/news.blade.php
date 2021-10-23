@extends('admin.pages.banners.layout')
@section('title', 'Контент страницы новостей')
@php $back_url = route('admin.pages.main') @endphp
@section('body')
    @bannerBlock(['title'=>'Контент'])
    <div class="row">
        <div class="col-12 col-dxl-6">
            @card(['title'=>'Блок'])
            @banner('content.title', 'Заголовок страницы')

            @endcard
        </div>
    </div>
    @endbannerBlock
@endsection