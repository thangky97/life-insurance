<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'service_name' => 'required|max:40',
            'description' => 'required',
            'status' => 'required',
            'images' =>
                [
                    'image',
                    'mimes:jpeg,png,jpg',
                    'mimetypes:image/jpeg,image/png',
                    'max:2048',
                ],
        ];
    }

    public function messages(): array
    {
        return [
            'service_name.required' => 'Tên dịch vụ bắt buộc nhập!',
            'description.required' => 'Mô tả bắt buộc nhập',
            'status.required' => 'Bạn chưa chọn trạng thái',
            'images.image' => 'Bắt buộc phải là ảnh!',
            'images.max' => 'Ảnh không được lớn hơn 2MB!',
        ];
    }
}
