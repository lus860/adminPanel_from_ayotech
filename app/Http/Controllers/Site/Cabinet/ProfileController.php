<?php

namespace App\Http\Controllers\Site\Cabinet;

use App\Http\Controllers\Site\BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends BaseController
{
    public function main(){

        $data = [];
        $data['user'] = User::auth();
        $data['seo'] = $this->staticSEO(__('cabinet.profile settings'));
        $data['current_page'] = 111;

        return view('site.pages.cabinet.profile', $data);
    }

    public function personal(Request $request){
        Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|phone|max:255',
            'address' => 'required|string|max:255',
        ], [
            'required' => __('auth.required'),
            'string' => __('auth.required'),
            'max' => __('auth.max'),
            'phone' => __('auth.invalid phone'),
        ])->validate();
        $user = User::auth();
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();
        return redirect()->route('cabinet.profile')->with(['personal.success'=>true]);
    }

    public function security(Request $request) {
        $user = User::auth();
        Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required_with:password|same:password',
            'current_password' => ['required', 'string', function ($attribute, $value, $fail) use ($user){
                    if (!Hash::check($value, $user->password)) {
                        $fail(__('auth.invalid password'));
                    }
                }],
            ], [
                'required' => __('auth.required'),
                'string' => __('auth.required'),
                'max' => __('auth.max'),
                'email' => __('auth.invalid email'),
                'unique' => __('auth.unique'),
                'min' => __('auth.min'),
                'required_with' => __('auth.required'),
                'same' => __('auth.confirmed'),
            ])->validate();
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        Auth::login($user);
        return redirect()->route('cabinet.profile')->with(['security.success'=>true]);
    }
}
