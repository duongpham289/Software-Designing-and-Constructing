<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' =>'required',
            'email'=>'required|email',
            // 'password'=>'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Không được để trống name',
            'email.required'=>'Không được để trống email',
            'email.email'=>'Email không đúng định dạng',
            // 'password.required'=>'Password không được để trống',
            // 'password.min'=>'Password không được nhỏ hơn 6 ký tự',
        ];
    }
}
