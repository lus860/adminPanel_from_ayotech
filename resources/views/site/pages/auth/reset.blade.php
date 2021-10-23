@extends('site.layouts.app')
@section('content')



    <div class="login-wrapper" style="background: linear-gradient(#00000040,#00000040), url('{{asset('u/banners/'.$banner->reset->image)}}');
}">
        <div class="login-block" >
            <div class="login-block-title">
                <p>{{t('Reset Page.Reset Password')}}</p>
            </div>
            @if ($errors->has('global'))
                <div class="err-global">{{ $errors->first('global') }}</div>
            @endif
            <div class="login-block_form_content">
                <form  class="login-block_form" action="{{ route('password.update', ['email'=>$email,'token'=>$token]) }}" method="post">
                    @csrf

                    <div>
                        <label for="email">{{t('Reset Page.Email')}} *</label>
                        <input value="{{ $email }}"  type="text" id="email" class="login-form-control" name="email" placeholder="{{t('Reset Page.Email')}}" maxlength="255" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="err-field">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div>
                        <label for="password">{{t('Reset Page.New password')}} *</label>
                        <input type="password" id="password" class="login-form-control" name="password" placeholder="{{t('Reset Page.New password')}}">
                        @if ($errors->has('password'))
                            <span class="err-field">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div>
                        <label for="password_confirmation">{{t('Reset Page.Confirm password')}} *</label>
                        <input type="password" id="password_confirmation" class="login-form-control" name="password_confirmation" placeholder="{{t('Reset Page.Confirm password')}}">
                        @if ($errors->has('password_confirmation'))
                            <span class="err-field">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>

                    <div class="login-form-group" style="    text-align: center; display: block;">
                        <button type="submit" style="background: black;color: white;padding: 10px 25px;" >{{t('Reset Page.Confirm')}}</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
@endsection