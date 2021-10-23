@extends('site.layouts.app')
@section('content')


    <div class="login-wrapper" style="background: linear-gradient(#00000040,#00000040), url('{{asset('u/banners/'.$banner->reset->image)}}');
">
        <div class="login-block" >
            <div class="login-block-title">
                <p>{{t('Reset Page.Reset Password')}}</p>
            </div>
            @if ($errors->has('global'))
                <div class="err-global">{{ $errors->first('global') }}</div>
            @endif
            <div class="login-block_form_content">
                <form  class="login-block_form" action="{{ route('password.email') }}" method="post">
                    @csrf

                    <div>
                        <label for="email">{{t('Reset Page.Email')}} *</label>
                        <input type="text" id="email" class="login-form-control" name="email" placeholder="{{t('Reset Page.Email')}}" maxlength="255" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="err-field">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="login-form-group" style="    text-align: center; display: block;">
                        <button type="submit" style="background: black;color: white;padding: 10px 25px;" >{{t('Reset Page button.Send')}}</button>
                    </div>
                </form>

            </div>

        </div>
    </div>




{{--    <div class="container" style="margin-top: 125px;">--}}
{{--        <div class="global-page-title">--}}
{{--            <p>{{ __('app.password recovery') }}</p>--}}
{{--        </div>--}}
{{--        <div class="container email_cont">--}}
{{--            <form style="    margin: 20px 0;display: flex;justify-content: center;" action="{{ route('password.email') }}" method="post">@csrf--}}
{{--                <div class="login_form" style="display: flex;flex-direction: column;">--}}
{{--                    @if ($errors->has('global'))--}}
{{--                        <div class="err-global">{{ $errors->first('global') }}</div>--}}
{{--                    @endif--}}
{{--                    <div class="login-form-group">--}}
{{--                        <input type="text" class="login-form-control" name="email" placeholder="{{ __('app.email') }}" maxlength="255" value="{{ old('email') }}">--}}
{{--                        @if ($errors->has('email'))--}}
{{--                            <span class="err-field">{{ $errors->first('email') }}</span>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    <div class="login-form-group" style="margin-top: 25px">--}}
{{--                        <button type="submit" class="login-form-submit">{{ __('app.recover confirm') }}</button>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection