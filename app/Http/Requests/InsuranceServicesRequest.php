<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsuranceServicesRequest extends FormRequest
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
                'dead' => 'required',
                'accidental_death' => 'required',
                'status' => 'required',
                'death_due_special_accident' => 'required',
                'death_from_cancer' => 'required',
                'serious_illness_mild' => 'required',
                'serious_illness' => 'required',
                'benefits_pay_medical_expenses' => 'required',
                'temporary_disability_benefits' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
                'dead.required' => 'Bạn không được để trống!',
                'accidental_death.required' => 'Bạn không được để trống!',
                'status.required' => 'Bạn chưa chọn trạng thái!',
                'death_due_special_accident.required' => 'Bạn không được để trống!',
                'death_from_cancer.required' => 'Bạn không được để trống!',
                'serious_illness_mild.required' => 'Bạn không được để trống!',
                'serious_illness.required' => 'Bạn không được để trống!',
                'benefits_pay_medical_expenses.required' => 'Bạn không được để trống!',
                'temporary_disability_benefits.required' => 'Bạn không được để trống!'
        ];
    }
}
