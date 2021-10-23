@extends('site.layouts.app')
@section('content')

    <section class=" mt-lg-5 mb-5 errorpage">
        <div class="container">
            <div class="error-min__block d_flex j_content_center">
                <div class="error-min__box">
                    @if ($error['message'])
                    <div class="error-min__title">
                        <h1>{{ $error['message'] }}</h1>
                    </div>
                    @endif
{{--                    <div class="error-min__number">--}}
{{--                        <strong>{{ $error['code'] }}</strong>--}}
{{--                    </div>--}}

                        <div class="error-min__href " style="display: flex;  justify-content: center">
                            <h2>{{t('site.Էջը չի գտնվել')}}</h2>
                        </div>
                    <div class="error-min__href " style="display: flex;  justify-content: center; align-items: center">
                            <img src="{{asset('f/site/img/notfound.png')}}" style="max-width:6500px; width: 100%; " alt="{{t('site.Էջը չի գտնվել')}}">
                    </div>
                        <div style="display: flex;  justify-content: center">
                            <p class="green p-2">{{t('site.Ներեցեք, ձեր խնդրած էջը չի գտնվել:')}}</p>

                    </div>
                        <div style="display: flex;  justify-content: center">

                         <a class="blue_button font-weight-bold rounded outline-unset" href="{{route('page')}}">
                             <i class="fa fa-home"></i> {{t('site.Վերադառնալ գլխավոր էջ')}}
                                 </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
