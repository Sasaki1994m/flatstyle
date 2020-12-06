<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class RegisterController extends Controller
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    // 登録確認画面へ
    public function signup_confirm(UserRequest $request)
    {
        $data = $request->all();
        //dataを確認画面へ送付
        return view('auth.confirm', [
            'data' => $data
        ]);
    }
    //userの登録
    public function store(Request $request)
    {
        $data = $request->except('action');
        //usersテーブルに登録
        $users = new User();
        $users->name = $data['name'];
        $users->email = $data['email'];
        $users->password = Hash::make($data['password']);
        $users->save();
        return redirect('/login')->with('flash_message', __('会員登録が完了しました'));
    }
}
