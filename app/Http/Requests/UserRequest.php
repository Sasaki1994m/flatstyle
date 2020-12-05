<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:60'],
            //半角英数字をそれぞれ1種類以上含む6文字以上100文字以下の正規表現
            'password' => ['required', 'string', 'min:6', 'confirmed', 'regex:/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{6,100}+\z/i'],
            'password_confirmation' => ['required', 'string', 'min:6', 'regex:/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{6,100}+\z/i'],
        ];
    }
}
