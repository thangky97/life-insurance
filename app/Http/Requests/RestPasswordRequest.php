<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestPasswordRequest extends FormRequest
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
    public function rules()
    {
        $rules = [];
        $currentAction = $this->route()->getActionMethod();
        //để lấy phương thức hiện tại
        switch ($this->method()):
            case 'POST':
                switch ($currentAction) {            
                    case 'update_password':
                        $rules = [
                            'password' => 'required',
                            'new_password' => 'required|min:6|max:30|different:password',
                        ];
                        break;
                    default:
                        break;
                }
                break;
            default:
                break;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'password.required' => 'Mật khẩu bắt buộc nhập',
            'new_password.required' => 'Mật khẩu mới bắt buộc nhập',
            'new_password.min' => 'Mật khẩu mới tối thiểu 6 ký tự',
            'new_password.max' => 'Mật khẩu mới tối đa 32 ký tự',
            'new_password.different' => 'Mật khẩu mới phải khác mật khẩu cũ'
        ];
    }
}
