@extends('site.notifications.layout')
@section('content')
    <p><strong>Բաժին:</strong>Կապ</p>
    <p><strong>Անուն:</strong> {{ $name }}</p>
    <p><strong>Էլ․հասցե:</strong> {{ $email }}</p>
    <p><strong>Հեռ․:</strong> {{ $phone }}</p>
    <p><strong>Նյութ:</strong> {{ $theme }}</p>
    <div>
        <strong>Հաղորդագրություն:</strong>
        <p>{{ $text }}</p>
    </div>
@endsection
