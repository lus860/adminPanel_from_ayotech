@extends('site.layouts.app')
@section('content')
    <div class="login-wrapper" style="background: linear-gradient(#00000040,#00000040), url('{{asset('u/banners/'.$banner->login->image)}}');
}">
        <div class="login-block" >
            <div class="login-block-title">
                <p>{{t('Login Page.LOG IN')}}</p>
            </div>
            <div style="    text-align: center;font-size: 20px;line-height: 1.5;color: black;">
                @if (session('registered'))
                    <p class="green font-weight-bold text-center">{{ __('auth.registered.line 1') }}</p>
                    <p class="text-center">{{ __('auth.registered.line 2') }}</p>
                @elseif (session('verified'))
                    <p class="green font-weight-bold text-center">{{ __('auth.verified') }}</p>
                @elseif (session('resetLinkSent'))
                    <p class="green font-weight-bold text-center">{{ __('auth.reset link sent') }}</p>
                @endif
            </div>
            @if ($errors->has('global'))
                <div class="err-global">{{ $errors->first('global') }}</div>
            @endif
            <div class="login-block_form_content">
                <form  class="login-block_form" action="{{ route('login.post') }}" method="post">
                    @csrf

                        <div>
                            <label for="email">{{t('Login Page.Email')}} *</label>
                            <input type="text" id="email" class="login-form-control" name="email" placeholder="{{t('Login Page.Email')}}" maxlength="255" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="err-field">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div>
                                <label for="password">{{t('Login Page.Password')}} *</label>
                            <input type="password" id="password" class="login-form-control" name="password" placeholder="{{t('Login Page.Password')}}">
                            @if ($errors->has('password'))
                                <span class="err-field">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    <div class="login-form-group" style="    text-align: center; display: block;">
                        <button type="submit" style="background: black;color: white;padding: 10px 25px;" >{{t('Login Page Button.LOG IN')}}</button>
                    </div>
                </form>
                <div class="login-form-links">
                                        <div><a style="color: #162B3B" href="{{ route('password.email') }}">{{t('Login Page.Forgot password?')}}</a></div>
                                        <div><a style="color: #162B3B" href="{{ route('register') }}"> {{t('Login Page.Registration')}}</a></div>
                                    </div>
            </div>

        </div>
    </div>



{{--    <div style="margin-top: 100px;height:100%; background-color: red" class="container">--}}

{{--        <div class="container">--}}
{{--            @if (session('registered'))--}}
{{--                <p class="green font-weight-bold text-center">{{ __('auth.registered.line 1') }}</p>--}}
{{--                <p class="text-center">{{ __('auth.registered.line 2') }}</p>--}}
{{--            @elseif (session('verified'))--}}
{{--                <p class="green font-weight-bold text-center">{{ __('auth.verified') }}</p>--}}
{{--            @elseif (session('resetLinkSent'))--}}
{{--                <p class="green font-weight-bold text-center">{{ __('auth.reset link sent') }}</p>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="container login_container">--}}
{{--            <form class="login_form" action="{{ route('login.post') }}" method="post">@csrf--}}
{{--                @if ($errors->has('global'))--}}
{{--                    <div class="err-global">{{ $errors->first('global') }}</div>--}}
{{--                @endif--}}
{{--                <div class="login-form-group only_login">--}}
{{--                    <input type="text" class="login-form-control" name="email" placeholder="{{ __('app.email') }}" maxlength="255" value="{{ old('email') }}">--}}
{{--                    @if ($errors->has('email'))--}}
{{--                        <span class="err-field">{{ $errors->first('email') }}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="login-form-group only_login">--}}
{{--                    <input type="password" class="login-form-control" name="password" placeholder="{{ __('app.password') }}">--}}
{{--                    @if ($errors->has('password'))--}}
{{--                        <span class="err-field">{{ $errors->first('password') }}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="login-form-group" style="    text-align: right;">--}}
{{--                    <button type="submit" class="login-form-submit">{{ __('app.login') }}</button>--}}
{{--                </div>--}}
{{--                <div class="login-form-links">--}}
{{--                    <div><a href="{{ route('password.email') }}">{{ __('app.forgot password?') }}</a></div>--}}
{{--                    <div><a href="{{ route('register') }}">{{ __('app.registration') }}</a></div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection