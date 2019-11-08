<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCatRequest extends FormRequest
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
            'name' => 'required|min:3|max:10',
            'age' => 'required|numeric',
            'breed_id' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'vui lòng nhập tên',
            'name.min' => 'tên ít nhất 3 kí tự',
            'name.max' => 'tên nhiều nhất 10 kí tự',
            'age.required' => 'vui lòng nhập tuổi',
            'age.numeric' => 'tuổi phải là chữ số',
            'breed_id.required' => 'bắt buộc nhập',
            'breed_id.numeric' => 'phải là số'
        ];
    }
}
