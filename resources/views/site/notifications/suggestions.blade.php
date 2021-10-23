@extends('site.notifications.layout')
@section('content')

    <p><strong>Բաժին:</strong>Կարծիքներ և առաջարկներ</p>
    <p><strong>Անուն, Ազգանուն:</strong> {{ $ns??null }}</p>
    <p><strong>Էլ․ Հասցե:</strong> {{ $email??null }}</p>
    <p><strong>Հեռ.:</strong> {{ $phone??null }}</p>
    <p><strong>Ձեր առաջարկները:</strong> {{ $text??null }}</p>

@endsection

