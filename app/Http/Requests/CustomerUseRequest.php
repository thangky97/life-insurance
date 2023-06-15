<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUseRequest extends FormRequest
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
            'customer_name' => 'required',
            'job' => 'required',
            'images' =>
            [
                'image',
                'mimes:jpeg,png,jpg',
                'mimetypes:image/jpeg,image/png',
                'max:2048',
            ],
            'status' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'customer_name.required' => 'Tên bắt buộc nhập!',
            'job.required' => 'Nghề nghiệp bắt buộc nhập!',
            'images.image' => 'Bắt buộc phải là ảnh!',
            'images.max' => 'Ảnh không được lớn hơn 2MB!',
            'status.required' => 'Bạn chưa chọn trạng thái',
        ];
    }
}
