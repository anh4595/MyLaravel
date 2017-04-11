<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name_register' => 'required',
            'address_register' => 'required',
            'phone_register' => 'required',
			'username_register' => 'required|unique:customers,username',
			'pass_register'=> 'required',
			'repass_register' => 'required|same:pass_register',
			'emmail_register' => 'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
        ];
    }

    public function messages()
    {
        return [
            'name_register.required' => "Vui lòng nhập họ tên",
            'address_register.required' => "Vui lòng nhập địa chỉ",
            'phone_register.required' => "Vui lòng nhập số điện thoại",
			'username_register.required' => "Vui lòng nhập tên người dùng",
			'username_register.unique' => "Tên người dùng đã tồn tại",
			'pass_register.required' => "Vui lòng nhập mật khẩu",
			'repass_register.required' => "Vui lòng nhập lại mật khẩu",
			'repass_register.same' => "Mật khẩu không trùng khớp",
			'emmail_register.required' => "Vui lòng nhập địa chỉ email",
			'emmail_register.regex' => "Sai định dạng email"
        ];
    }
    
}
