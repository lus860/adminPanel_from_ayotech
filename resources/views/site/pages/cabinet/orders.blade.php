@extends('site.layouts.cabinet')
@section('page_title', $title)
@section('cabinet_page')
    @if (count($items))
        <div class="basket-list pb-s">
            <table class="basket-table">
                <thead>
                <tr>
                    <th>N</th>
                    <th>{{ __('cabinet.date') }}</th>
                    <th>{{ __('cabinet.sum') }}</th>
                    <th>{{ __('cabinet.more') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr class="basket-prod cabinet-basket-prod">
                        <td>N{{ $item->id }}</td>
                        <td>{{ $item->created_at->format('d.m.Y H:i') }}</td>
                        <td>{{ $item->sum }} <span class="amd"></span></td>
                        <td><a class="red-link" href="{{ route('cabinet.order', ['id'=>$item->id]) }}">{{ __('cabinet.more') }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-danger font-weight-bold">{{ $empty }}</p>
    @endif
@endsection