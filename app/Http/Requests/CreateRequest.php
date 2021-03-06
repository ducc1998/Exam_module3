<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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

                 'code' => 'required|unique:agencies',
                 'name' => 'required|',
                 'phone' => 'required|numeric',
                 'email' => 'required|email',
                 'address' => 'required',
                 'manager' => 'required',
        ];
    }
    public function messages()
    {
        $messages = [
            'code.required' => 'Không được để trống',
            'code.unique' => 'Mã số bị trùng',
            'name.required' => 'Không được để trống',
            'phone.required' => 'Không được để trống',
            'phone.numeric' => 'Số điện thoại phải là số',
            'email.required' => 'Không được để trống',
            'email.email' => 'Sai định dạng email',
            'address.required' => 'Không được để trống',
            'manager.required' => 'Không được để trống',
        ];
        return $messages;
    }
}
