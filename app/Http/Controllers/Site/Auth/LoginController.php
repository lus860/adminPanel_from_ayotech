<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Site\BaseController;
use App\Models\Banner;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->redirectTo = url()->previous();
        $this->middleware('guest')->except('logout');
        parent::__construct();
    }

    public function showLoginForm(){
        return view('site.pages.auth.login', [
            'banner'=>Banner::get('auth'),
            'current_page'=>111,
            'seo'=>$this->staticSEO(__('app.authentication')),
            'page_classes'=>' fit-to-max',
        ]);
    }

    protected function validateLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ], [
            'required' => __('auth.required'),
            'string' => __('auth.required'),
        ]);
        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->errors()->messages())->redirectTo($this->redirectURL());
        }
    }

    protected function sendLockoutResponse(Request $request)
    {
        $seconds = $this->limiter()->availableIn(
            $this->throttleKey($request)
        );

        throw ValidationException::withMessages([
            'global' => [Lang::get('auth.throttle', ['seconds' => $seconds])],
        ])->redirectTo($this->redirectURL())->status(429);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'global' => [trans('auth.failed')],
        ])->redirectTo($this->redirectURL());
    }

    private function redirectURL(){
        return route('login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $user = User::where('email', $request->input('email'))->first();
        if (!$user || !Hash::check($request->input('password'),  $user->password)) {
            $this->incrementLoginAttempts($request);
            return $this->sendFailedLoginResponse($request);
        }
        elseif (!$user->isVerified()) {
            return redirect()->route('login')->withErrors(['global'=>__('auth.not verified')])->withInput();
        }
        elseif ($user->active==0) {
            return redirect()->route('login')->withErrors(['global'=>__('auth.blocked')])->withInput();
        }
        Auth::login($user, true);
        return $this->sendLoginResponse($request);
    }
}
