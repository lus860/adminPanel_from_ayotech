<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Site\BaseController;
use App\Models\Banner;
use App\Models\User;
use App\Services\Support\Str;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectTo = route('login');
        $this->middleware('guest');
        parent::__construct();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'mail', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required_with:password', 'same:password'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'phone', 'max:255']
        ], [
            'required' => __('auth.required'),
            'required_with' => __('auth.required'),
            'string' => __('auth.required'),
            'unique' => __('auth.unique'),
            'min' => __('auth.min'),
            'max' => __('auth.max'),
            'mail' => __('auth.invalid email'),
            'phone' => __('auth.invalid phone'),
            'same' => __('auth.confirmed'),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data, $verification)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'address' => $data['address'],
            'verification' => Hash::make($verification)
        ]);
    }

    public function showRegistrationForm()
    {

        return view('site.pages.auth.register', [
            'banner'=>Banner::get('auth'),
            'current_page'=>111,
            'page_classes'=>' fit-to-max','seo'=>$this->staticSEO(__('app.registration'))]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $verification_token = Str::random(32);
        $user = $this->create($request->all(), $verification_token);
        $user->sendRegisteredNotification($verification_token);
//        $this->guard()->login($user);
//        return $this->registered($request, $user)
//            ?: redirect($this->redirectPath());
        return redirect($this->redirectPath())->with(['registered'=>true]);
    }

    public function verifyEmail($email, $token) {
        $user = User::where('email', $email)->firstOrFail();
        if (!$user->verification || !Hash::check($token, $user->verification)) abort(404);
        $user->verification=null;
        $user->save();
        return redirect()->route('login')->with(['verified'=>true])->withInput(['email'=>$user->email]);
    }
}
