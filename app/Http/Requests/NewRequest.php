<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRequest extends FormRequest
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
                'title' => 'required|min:3|max:40',
                'content' => 'required',
                'user_id' => 'required',
                'post_date' => 'required',
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
                'title.required' => 'Tiêu đề bắt buộc nhập!',
                'title.min' => 'Tiêu đề tối thiểu 3 ký tự!',
                'title.max' => 'Tiêu đề tối đa là 40 ký tự!',
                'content.required' => 'Nội dung bắt buộc nhập!',
                'user_id.required' => 'Bạn chưa chọn người đăng!',
                'post_date.required' => 'Bạn chưa chọn ngày đăng!',
                'images.image' => 'Bắt buộc phải là ảnh!',
                'images.max' => 'Ảnh không được lớn hơn 2MB!',
                'status.required' => 'Bạn chưa chọn trạng thái',
        ];
    }
}
