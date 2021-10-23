<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Site\BaseController;
use App\Models\Banner;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        parent::__construct();
    }

    public function showLinkRequestForm()
    {
        return view('site.pages.auth.email', [
            'banner'=>Banner::get('auth'),
            'page_classes'=>' fit-to-max','current_page'=>111,
            'noindex' => true, 'seo'=>$this->staticSEO(__('app.password recovery'))]);
    }

    protected function validateEmail(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|string|mail',
        ],[
            'required' => __('auth.required'),
            'string' => __('auth.required'),
            'mail' => __('auth.invalid email'),
        ])->validate();
    }

    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => __('auth.user not found')]);
    }

    protected function sendResetLinkResponse(Request $request, $response)
    {
        return redirect()->route('login')->with('resetLinkSent', true);
    }

}
