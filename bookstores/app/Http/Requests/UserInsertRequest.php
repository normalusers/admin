<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserInsertRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //给校验类授权
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
            'username' => 'required' ,
            'password' => 'required' ,
            'repassword' => 'required|max:10' ,
            'email' => 'required|email' ,
            'phone' => 'required|max:10' ,
        ];
    }
    public function messages()
    {
        return [
            'username.required' => $this -> isnulla('username'),
            'password.required'  => $this -> isnulla('password'),
            'phone.required'  => $this -> isnulla('phone'),
            'repassword.required'  => $this -> isnulla('password'),
            'email.required'  => $this -> isnulla('email'),
        ];
    }
    public function isnulla($aa){
        switch ($aa) {
            case 'username':
                $str = '用户名不能为空';
                break;
            case 'password':
                $str = '用户密码不能为空';
                break;
            case 'repassword':
                $str = '用户确认密码不能为空';
                break;
            case 'phone':
                $str = '联系方式不能为空';
                break;
            case 'email':
                $str = '邮箱不能为空';
                break;
        }
        return $str;
    }
}
