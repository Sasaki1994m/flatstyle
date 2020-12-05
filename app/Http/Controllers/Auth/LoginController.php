<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
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
    protected $redirectTo = '/top';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    // ログイン時の挙動を記述
    protected function authenticated(Request $request)
    {
        // フラッシュメッセージを表示
        return redirect('top')->with('flash_message', __('ログインしました'));
    }

    // ログアウト時の挙動を記述
    public function loggedOut(Request $request)
    {
        // フラッシュメッセージを表示
        return redirect('')->with('flash_message', __('ログアウトしました'));
    }
}
