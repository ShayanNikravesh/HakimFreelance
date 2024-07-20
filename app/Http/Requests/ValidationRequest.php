<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email'=>'required|string|email|max:255|unique:managers,email',
            'password'=>['required','min:6','confirmed'],
            'level'=>['required'],
        ];
    }
    public function messages()
{
    return [
        'email.required' => 'فیلد ایمیل الزامی است.',
        'email.email' => 'فرمت ایمیل صحیح نمی‌باشد.',
        'name.required' => 'فیلد نام الزامی است.',
    ];
}
}
