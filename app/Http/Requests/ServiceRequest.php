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
            'service_name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'images' =>
                [
                    'image',
                    'mimes:jpeg,png,jpg',
                    'mimetypes:image/jpeg,image/png',
                    'max:2048',
                ],
            'charges' => 'required',
            'duration' => 'required',
            'face_protect_life' => 'required',
            'comprehensive_accident_insurance' => 'required',
            'critical_illness_insurance' => 'required',
            'health_care_insurance' => 'required',
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
            'charges' => 'Bạn chưa nhập mức phí!',
            'duration' => 'Bạn chưa nhập thời hạn!',
            'face_protect_life' => 'Bạn chưa nhập BV tính mạng!',
            'comprehensive_accident_insurance' => 'Bạn chưa nhập BH tai nạn!',
            'critical_illness_insurance' => 'Bạn chưa nhập BH bệnh hiểm nghèo!',
            'health_care_insurance' => 'Bạn chưa nhập BH chăm sóc sức khỏe!',
        ];
    }
}
