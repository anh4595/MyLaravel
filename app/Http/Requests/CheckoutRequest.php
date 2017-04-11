<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên người nhận hàng không được để trống',
            'address.required' => 'Địa chỉ giao hàng không được để trống',
            'phone.required' => 'Số điện thoại nhận hàng không được để trống',
            'email.required' => 'Địa chỉ email không được để trống',
        ];
    }
}
