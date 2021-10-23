@extends('site.layouts.app')
@section('content')
    <div style="margin-top: 120px" class="container py-s">
        <div class="global-page-title">
            <h1 style="font-size: 40px">@yield('page_title')</h1>
        </div>
        <div class="cabinet-container">
            <div class="cabinet-leftbar" style="background: white;    box-shadow: 0 0 9px #0000002e;">
                <div class="cabinet-menu">
{{--                    @if ($pending_orders_count>0)--}}
{{--                        @component('site.components.cabinet_link', ['route'=>'cabinet.orders.pending', 'title'=>__('cabinet.pending orders')])@endcomponent--}}
{{--                    @endif--}}
{{--                    @component('site.components.cabinet_link', ['route'=>'cabinet.orders.accepted', 'title'=>__('cabinet.accepted orders')])@endcomponent--}}
{{--                    @if ($declined_orders_count>0)--}}
{{--                            @component('site.components.cabinet_link', ['route'=>'cabinet.orders.declined', 'title'=>__('cabinet.declined orders')])@endcomponent--}}
{{--                    @endif--}}
                    @component('site.components.cabinet_link', ['route'=>'cabinet.profile', 'title'=>__('cabinet.profile settings')])@endcomponent
                    <a class="cabinet-link" href="javascript:void(0)" id="logout_cabinet" data-toggle="modal" data-target="#logout-modal">{{ __('cabinet.logout') }}</a>
                </div>
            </div>
            <div class="cabinet-content">
                <div class="cabinet-page">@yield('cabinet_page')</div>
            </div>
        </div>
    </div>
    @yield('cabinet_foot')
    <div class="modal fade order-modal" style="display: none;" id="logout-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document" style="max-width:600px">
            <button type="button" class="close_modal" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-content">
                <div class="modal-header">
                        <p class="modal-title">{{ __('cabinet.logout? title') }}</p>
                </div>
                <div class="modal-body">
                    <form action="{{ route('logout') }}" method="post">
                        <div class="modal-text">{{ __('cabinet.logout?') }}</div>
                        <div class="order-submit">
                            <button  type="submit" class="login-form-submit btn-order">{{ __('cabinet.logout confirm') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    @js(aApp('bootstrap/js/bootstrap.js'))
@endpush
