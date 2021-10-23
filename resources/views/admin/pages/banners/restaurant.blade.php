@extends('admin.pages.banners.layout')
@section('title', 'Контент страницы ресторана')
@php $back_url = route('admin.pages.main') @endphp
@section('body')
    @bannerBlock(['title'=>'Контент'])
    <div class="row">
        <div class="col-12 col-dxl-6">
            @card(['title'=>'Информационный блок'])
            @banner('info.image', 'Изоброжение блока (600 X 520)')
            @banner('info.title', 'Название блока')
            @banner('info.text', 'Текст блока')
            @banner('info.phone', 'Номер телефона блока')

            @endcard
        </div>
        <div class="col-12 col-dxl-6">
            @card(['title'=>'Изоброжение заголовка'])
            @banner('content.title', 'Загаловок страницы')
            @banner('content.image', 'Изоброжение (рек шир. 1920)')
            @endcard

            @card(['title'=>'Текстовый блок'])
            @banner('text.text', 'Текст блока')
            @endcard

            @card(['title'=>'Блок для меню'])
            @banner('menu.title', 'Текст блока')
            @banner('menu.icon',  'Иконка (36 X 36)')
            @banner('menu.file',    'Файл меню (PDF)')
            @endcard



        </div>

    </div>

    @endbannerBlock
@endsection
