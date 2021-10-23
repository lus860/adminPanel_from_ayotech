
@extends('admin.pages.banners.layout')
@section('title', 'История')
@php $back_url = route('admin.pages.main') @endphp
@section('body')
    @bannerBlock(['title'=>'История'])
    <div class="row">
        <div class="col-12 col-dxl-6">
            @card(['title'=>''])
            @banner('content.title', 'Название')
            @banner('content.desc', 'Текст')
            @endcard
        </div>
        <div class="col-12 col-dxl-6">
            @card(['title'=>''])
            @banner('content.image', 'Изоброжение (рек шир. 500)')
            @endcard
        </div>
    </div>
    @endbannerBlock
@endsection
