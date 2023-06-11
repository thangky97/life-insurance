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
            'full_name' => 'required|max:40',
            'phone_number' => 'required|numeric|min:10',
            'calling_date' => 'required',
            'call_back' => 'required',
            'status' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'source' => 'required',
            'status_customer' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'Tên khách hàng bắt buộc nhập!',
            'full_name.min' => 'Tên tối thiểu 3 ký tự!',
            'full_name.max' => 'Tên tối đa là 40 ký tự!',
            'calling_date.required' => 'Bạn chưa chọn ngày gọi',
            'call_back.required' => 'Bạn chưa chọn ngày gọi lại',
            'gender.required' => 'Bạn chưa chọn giới tính',
            'address.required' => 'Bạn chưa nhập địa chỉ',
            'source.required' => 'Bạn chưa nhập nguồn',
            'phone_number.required' => 'Số điện thoại bắt buộc nhập!',
            'phone_number.numeric' => 'Số điện thoại phải là số!',
            'phone_number.min' => 'Số điện thoại tối thiểu 10 số!',
            'status.required' => 'Bạn chưa chọn trạng thái',
            'status_customer.required' => 'Bạn chưa chọn trạng thái quan tâm',
        ];
    }
}
