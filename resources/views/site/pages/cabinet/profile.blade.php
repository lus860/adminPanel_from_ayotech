
@extends('site.layouts.cabinet')

@section('page_title', __('cabinet.profile settings'))

@section('cabinet_page')
    <div class="cabinet_profile_container" style="margin-top: 15px">
        <div class="cabinet_profile_container_first">
            <div class="cabinet-block-title">{{ __('cabinet.login settings') }}</div>
            @if (session('security.success'))
                <div class="cabinet-block-success">{{ __('cabinet.information updated') }}</div>
            @endif
            <div class="cabinet-form">
                <form action="{{ route('cabinet.security') }}" method="post" autocomplete="off"> @csrf
                    <div class="cabinet_profile_inputs login-form-group">
                        <label for="form-email" class="login-form-label">{{ __('app.email') }}</label>
                        <input type="text" id="form-email" class="login-form-control" name="email" placeholder="{{ __('app.email') }}" maxlength="255" value="{{ old('email', $user->email) }}">
                        @if ($errors->has('email'))
                            <span class="err-field">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="cabinet_profile_inputs login-form-group">
                        <label for="form-password" class="login-form-label">{{ __('app.new password') }}</label>
                        <input type="password" id="form-password" class="login-form-control" name="password" placeholder="{{ __('app.new password') }}">
                        @if ($errors->has('password'))
                            <span class="err-field">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="cabinet_profile_inputs login-form-group">
                        <label for="form-password-confirm" class="login-form-label">{{ __('app.password confirmation') }}</label>
                        <input id="form-password-confirm" type="password" class="login-form-control" name="password_confirmation" placeholder="{{ __('app.password confirmation') }}">
                        @if ($errors->has('password_confirmation'))
                            <span class="err-field">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                    <div class="cabinet_profile_inputs login-form-group">
                        <label for="form-current-password" class="login-form-label">{{ __('app.current password') }}</label>
                        <input id="form-current-password" type="password" class="login-form-control" name="current_password" placeholder="{{ __('app.current password') }}">
                        @if ($errors->has('current_password'))
                            <span class="err-field">{{ $errors->first('current_password') }}</span>
                        @endif
                    </div>
{{--                    <div class="cabinet_profile_inputs login-form-group">--}}
                        <button style="margin-top: 25px" type="submit" class="login-form-submit">{{ __('cabinet.save') }}</button>
{{--                    </div>--}}
                </form>
            </div>
        </div>
        <div class="cabinet_profile_container_second">
            <div class="cabinet-block-title">{{ __('cabinet.personal info') }}</div>
            @if (session('personal.success'))
                <div class="cabinet-block-success">{{ __('cabinet.information updated') }}</div>
            @endif
            <div class="cabinet-form">
                <form action="{{ route('cabinet.personal') }}" method="post" autocomplete="off"> @csrf
                    <div class="cabinet_profile_inputs login-form-group">
                        <label for="form-name" class="login-form-label">{{ __('app.name') }}</label>
                        <input type="text" id="form-name" class="login-form-control" name="name" placeholder="{{ __('app.name') }}" maxlength="255" value="{{ old('name',$user->name) }}">
                        @if ($errors->has('name'))
                            <span class="err-field">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="cabinet_profile_inputs login-form-group">
                        <label for="form-phone" class="login-form-label">{{ __('app.phone') }}</label>
                        <input type="text" id="form-phone" class="login-form-control" name="phone" placeholder="{{ __('app.phone') }}" maxlength="255" value="{{ old('phone', $user->phone) }}">
                        @if ($errors->has('phone'))
                            <span class="err-field">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="cabinet_profile_inputs login-form-group">
                        <label for="form-address" class="login-form-label">{{ __('app.address') }}</label>
                        <input type="text" id="form-address" class="login-form-control" name="address" placeholder="{{ __('app.address') }}" maxlength="255" value="{{ old('address', $user->address) }}">
                        @if ($errors->has('address'))
                            <span class="err-field">{{ $errors->first('address') }}</span>
                        @endif
                    </div>
                    <div class="cabinet_prologin-form-submitfile_inputs login-form-group">
                        <button style="margin-top: 25px" type="submit" class="login-form-submit">{{ __('cabinet.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
