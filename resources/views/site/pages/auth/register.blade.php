@extends('site.layouts.app')
@section('content')


    <div class="login-wrapper" style="background: linear-gradient(#00000040,#00000040), url('{{asset('u/banners/'.$banner->register->image)}}');
}">
        <div class="login-block" >
            <div class="login-block-title">
                <p>{{t('Register Page.Registration')}}</p>
            </div>
            @if ($errors->has('global'))
                <div class="err-global">{{ $errors->first('global') }}</div>
            @endif
            <div class="login-block_form_content">

                <form  class="login-block_form" action="{{ route('register.post') }}" method="post" autocomplete="off">
                    @csrf

                    <div>
                        <label for="name">{{t('Register Page.Name')}} *</label>
                        <input type="text" id="name" class="login-form-control" name="name" placeholder="{{t('Register Page.Name')}}" maxlength="255" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="err-field">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="email">{{t('Register Page.Email')}} *</label>
                        <input type="email" id="email" class="login-form-control" name="email" placeholder="{{t('Register Page.email')}}" maxlength="255" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="err-field">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="address">{{t('Register Page.Address')}} *</label>
                        <input type="text" id="address" class="login-form-control" name="address" placeholder="{{t('Register Page.Address')}}" maxlength="255" value="{{ old('address') }}">
                        @if ($errors->has('address'))
                            <span class="err-field">{{ $errors->first('address') }}</span>
                        @endif
                    </div>


                    <div>
                        <label for="phone">{{t('Register Page.Phone')}} *</label>
                        <input type="text" id="phone" class="login-form-control" name="phone" placeholder="{{t('Register Page.Phone')}}" maxlength="255" value="{{ old('phone') }}">
                        @if ($errors->has('phone'))
                            <span class="err-field">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="password">{{t('Register Page.Password')}} *</label>
                        <input type="password" id="password" class="login-form-control" name="password" placeholder="{{t('Register Page.Password')}}">
                        @if ($errors->has('password'))
                            <span class="err-field">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                <div>
                    <label for="password_confirmation">{{t('Register Page.Confirm password')}} *</label>

                    <input type="password" id="password_confirmation" class="login-form-control" name="password_confirmation" placeholder="{{t('Register Page.Confirm password')}}">
                    @if ($errors->has('password_confirmation'))
                        <span class="err-field">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>









                    <div class="login-form-group" style="    text-align: center; display: block;">
                        <button  style="border: none; background: black;color: white;padding: 10px 25px;" type="submit" class="login-form-submit">{{t('Register Page button.Register')}}</button>
                    </div>
                </form>

            </div>

        </div>
    </div>


{{--        <div style="margin-top: 125px" class="container">--}}
{{--        <div class="global-page-title">--}}
{{--            <p>{{ __('app.registration') }}</p>--}}
{{--        </div>--}}
{{--        <div class="container register_container">--}}

{{--            <form class="login_form" action="{{ route('register.post') }}" method="post" autocomplete="off">@csrf--}}
{{--                <div class="register-text">{{ __('auth.all required') }}</div>--}}
{{--                @if ($errors->has('global'))--}}
{{--                    <div class="err-global">{{ $errors->first('global') }}</div>--}}
{{--                @endif--}}
{{--                <div class="register_form_group">--}}
{{--                    <input type="text" class="login-form-control" name="name" placeholder="{{ __('app.name') }}" maxlength="255" value="{{ old('name') }}">--}}
{{--                    @if ($errors->has('name'))--}}
{{--                        <span class="err-field">{{ $errors->first('name') }}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="register_form_group">--}}
{{--                    <input type="text" class="login-form-control" name="email" placeholder="{{ __('app.email') }}" maxlength="255" value="{{ old('email') }}">--}}
{{--                    @if ($errors->has('email'))--}}
{{--                        <span class="err-field">{{ $errors->first('email') }}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="register_form_group">--}}
{{--                    <input type="text" class="login-form-control" name="address" placeholder="{{ __('app.address') }}" maxlength="255" value="{{ old('address') }}">--}}
{{--                    @if ($errors->has('address'))--}}
{{--                        <span class="err-field">{{ $errors->first('address') }}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="register_form_group">--}}
{{--                    <input type="text" class="login-form-control" name="phone" placeholder="{{ __('app.phone') }}" maxlength="255" value="{{ old('phone') }}">--}}
{{--                    @if ($errors->has('phone'))--}}
{{--                        <span class="err-field">{{ $errors->first('phone') }}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="register_form_group">--}}
{{--                    <input type="password" class="login-form-control" name="password" placeholder="{{ __('app.password') }}">--}}
{{--                    @if ($errors->has('password'))--}}
{{--                        <span class="err-field">{{ $errors->first('password') }}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="register_form_group">--}}
{{--                    <input type="password" class="login-form-control" name="password_confirmation" placeholder="{{ __('app.password confirmation') }}">--}}
{{--                    @if ($errors->has('password_confirmation'))--}}
{{--                        <span class="err-field">{{ $errors->first('password_confirmation') }}</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="register_form_group reg_sub">--}}
{{--                    <button  type="submit" class="login-form-submit">{{ __('app.register') }}</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection


