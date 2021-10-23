
@extends('admin.pages.banners.layout')
@section('title', 'Контент Валюты')
@php $back_url = route('admin.pages.main') @endphp
@section('body')
    @bannerBlock(['title'=>'Валюты'])
    <div class="row">
        <div class="col-12 col-dxl-6">
            @cards(['title'=>'Валюты','banners'=>'exchange'])
            <div style="display: none">

                @banner('title', 'Название валюты')
            </div>
                @banner('name', 'Название валюты')
                @banner('rate', 'Курс')
                <div style="display: none">
                @banner('status', 'Активность')
            </div>
            @endcards
        </div>
    </div>
    @endbannerBlock
@endsection