<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

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
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,' . Auth::id(),
            'email' => 'required|email',
            'age'=>'nullable|numeric|min:1',
            'introduction' => 'max:80',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => '昵称已被占用，请重新填写',
            'name.regex' => '昵称只支持英文、数字、横杠和下划线。',
            'name.between' => '昵称必须介于 3 - 25 个字符之间。',
            'name.required' => '昵称不能为空。',
            'introduction.max' => '个人简介最多80个字。',
        ];
    }
}
