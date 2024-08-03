<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:30',
            'email' => 'required|email|max:255',
            'text' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください',
            'name.max' => '名前は30文字以内で入力してください',
            'email.required' => 'メールアドレスは必ず入力してください',
            'email.email' => 'メールアドレスを正しく入力してください',
            'email.max' => 'メールアドレスは255文字以内で入力してください',
            'text.required' => 'お問い合わせ内容は必ず入力してください',
            'text.max' => 'お問い合わせ内容は255文字以内で入力してください',
        ];
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(response()->json([
    //         'errors' => $validator->errors()
    //     ], 422));
    // }
}
