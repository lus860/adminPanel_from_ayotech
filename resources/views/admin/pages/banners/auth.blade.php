@extends('admin.pages.banners.layout')
@section('title', 'Фоновые изображения для страниц')
@php $back_url = route('admin.pages.main') @endphp
@section('body')
    @bannerBlock(['title'=>'Фоновые изображения'])
    <div class="row">
        <div class="col-12 col-dxl-6">
            @card(['title'=>'Фоновые изображения для страниц ( входа и регистрации ) '])
                @banner('login.image', 'Фоновое изображения для страницы входа')
                @banner('register.image', 'Фоновое изображения для страницы регистрации')
            @endcard
        </div>
        <div class="col-12 col-dxl-6">
            @card(['title'=>'Фоновое изображения для страницы забыли пароль'])
                @banner('reset.image', 'Фоновое изображения для страницы забыли пароль')
            @endcard
        </div>
    </div>
    @endbannerBlock
@endsection