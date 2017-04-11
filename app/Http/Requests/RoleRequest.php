<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'id_role' => 'required|unique:roles,id',
            'name_role' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'id_role.required' => 'Vui lòng nhập mã code cho quyền',
            'id_role.unique' => 'Mã code thẻ quyền đã tồn tại',
            'name_role.required' => 'Vui lòng nhập mô tả cho quyền'
        ];
    }
}
