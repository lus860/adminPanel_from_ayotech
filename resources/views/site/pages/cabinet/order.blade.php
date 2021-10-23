@extends('site.layouts.cabinet')
@section('page_title', $title)
@section('cabinet_page')
    <div class="text-center text-lg-left">
        <div class="back-link"><a href="{{ route('cabinet.orders.'.$status) }}" class="red-link">&Lt; {{ __('cabinet.list') }}</a></div>
        <div class="order-data"><span class="order-key">{{ __('cabinet.order number') }}:</span> <span class="d-inline-block">N{{ $order->id }}</span></div>
        <div class="order-data"><span class="order-key">{{ __('cabinet.date') }}:</span> <span class="d-inline-block">{{ $order->created_at->format('d.m.Y H:i') }}</span></div>
        @if ($order->delivery_id)
            <div class="order-data"><span class="order-key">{{ __('app.with delivery') }}:</span> <span class="d-inline-block text-success">{{ __('app.yes') }}</span></div>
            <div class="order-data"><span class="order-key">{{ __('app.district') }}:</span> <span class="d-inline-block">{{ $order->delivery_title }}</span></div>
            <div class="order-data"><span class="order-key">{{ __('app.delivery price') }}:</span> <span class="d-inline-block">{{ $order->delivery }} <span class="amd"></span></span></div>
        @else
            <div class="order-data"><span class="order-key">{{ __('app.with delivery') }}:</span> <span class="d-inline-block text-attention">{{ __('app.no') }}</span></div>
        @endif
        <div class="order-data"><span class="order-key">{{ __('app.name') }}:</span> <span class="d-inline-block">{{ $order->name }}</span></div>
        <div class="order-data"><span class="order-key">{{ __('app.address') }}:</span> <span class="d-inline-block">{{ $order->address }}</span></div>
        @if ($order->email)
            <div class="order-data"><span class="order-key">{{ __('app.email') }}:</span> <span class="d-inline-block">{{ $order->email }}</span></div>
        @endif
        <div class="order-data"><span class="order-key">{{ __('app.phone') }}:</span> <span class="d-inline-block">{{ $order->phone }}</span></div>
        @if ($order->phone_2)
            <div class="order-data"><span class="order-key">{{ __('app.alt phone') }}:</span> <span class="d-inline-block">{{ $order->phone_2 }}</span></div>
        @endif
        @if ($order->message)
            <div class="order-data">
                <div class="order-key">{{ __('app.notes') }}:</div>
                <div>{{ $order->message }}</div>
            </div>
        @endif
        <div class="order-data"><span class="order-key">{{ __('cabinet.sum') }}:</span> <span class="d-inline-block">{{ $order->sum }} <span class="amd"></span></span></div>
        <div class="order-data"><span class="order-key">{{ __('cabinet.payment method') }}:</span> <span class="d-inline-block">{{ __('cabinet.cash') }}</span></div>
        <div class="order-data"><span class="order-key">{{ __('cabinet.status') }}:</span>
            @switch($order->status)
                @case(1) <span class="text-success d-inline-block">{{ __('cabinet.accepted') }}</span> @break
                @case(-1) <span class="text-attention d-inline-block">{{ __('cabinet.declined') }}</span> @break
                @default <span class="text-warning d-inline-block">{{ __('cabinet.pending') }}</span>
            @endswitch
        </div>
    </div>
@endsection
@section('cabinet_foot')
    <div class="container pt-2s">
        <div class="global-page-title">
            <div class="h1">{{ __('cabinet.products') }}</div>
        </div>
        <div class="basket-list pt-2s pb-s">
            <table class="basket-table">
                <thead>
                <tr>
                    <th>{{ __('app.products.name') }}</th>
                    <th>{{ __('app.products.count') }}</th>
                    <th>{{ __('app.products.price') }}</th>
                    <th>{{ __('app.products.full price') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr class="basket-prod">
                        <td>
                            <div class="basket-prod-title">{{ $product->product_title }}</div>
                            @if (count($product->options))
                                <div class="basket-opts-block">
                                    <div class="basket-opt-title pb-1">{{ __('app.products.options') }}</div>
                                    <div class="order-data-addons">
                                        @foreach ($product->options as $option)
                                            <span>{{ $option['title'][$locale]??null }}</span>@if (!$loop->last), @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </td>
                        <td class="basket-price">
                            <span class="d-lg-none black">{{ __('app.products.count') }} - </span> {{ $product->count }}
                        </td>
                        <td class="basket-price">
                            <span class="d-lg-none black">{{ __('app.products.price') }} - </span> {{ $product->price }} <span class="amd"></span>
                        </td>
                        <td class="basket-price">
                            <span class="d-lg-none black">{{ __('app.products.full price') }} - </span>{{ $product->count*$product->price }} <span class="amd"></span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="sm-basket-foot basket-foot">
                <div class="sm-basket-info">
                    @if($order->delivery!==null)
                        <div class="sm-basket-line">
                            <div class="sm-basket-key">{{ __('app.price') }} - </div>
                            <div class="sm-basket-value">{{ $order->sum - $order->delivery }} <span class="amd"></span></div>
                        </div>
                        <div class="sm-basket-line">
                            <div class="sm-basket-key">{{ __('app.delivery') }} - </div>
                            <div class="sm-basket-value">{{ $order->delivery }} <span class="amd"></span></div>
                        </div>
                    @endif
                    <div class="sm-basket-line">
                        <div class="sm-basket-key">{{ __('app.all') }} - </div>
                        <div class="sm-basket-value">{{ $order->sum }} <span class="amd"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
