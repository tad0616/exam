<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
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
            'title' => 'required|min:2|max:255',
        ];
    }

    public function messages()
    {
        return [
            'required' => '必填欄位',
            'min'      => '至少要 :min 個字',
            'max'      => '最多只能 :max 個字',
        ];
    }
}
