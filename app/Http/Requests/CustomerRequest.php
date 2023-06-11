<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required|min:3|max:40',
            'phone_number' => 'required|numeric|min:10',
            'password' => 'required|min:6',
            'date_of_birthday' => 'required',
            'email' => 'required|email|max:50',
            'status' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'Tên bắt buộc nhập!',
            'full_name.min' => 'Tên tối thiểu 3 ký tự!',
            'full_name.max' => 'Tên tối đa là 40 ký tự!',
            'email.required' => 'Email bắt buộc nhập!',
            'email.email' => 'Email không đúng định dạng!',
            'email.max' => 'Email tối đa 50 ký tự!',
            'password.required' => 'Mật khẩu bắt buộc nhập!',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự!',
            'phone_number.required' => 'Số điện thoại bắt buộc nhập!',
            'phone_number.numeric' => 'Số điện thoại phải là số!',
            'phone_number.min' => 'Số điện thoại tối thiểu 10 số!',
            'status.required' => 'Bạn chưa chọn trạng thái',
        ];
    }
}
