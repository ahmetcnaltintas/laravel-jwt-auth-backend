<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Lütfen adınızı ve soyadınızı giriniz.',
            'name.string' => 'Ad ve soyad yalnızca metin içermelidir.',
            'name.max' => 'Ad ve soyad en fazla 255 karakter olabilir.',

            'email.required' => 'E-posta adresi alanı zorunludur.',
            'email.string' => 'E-posta adresi yalnızca metin içermelidir.',
            'email.email' => 'Lütfen geçerli bir e-posta adresi giriniz.',
            'email.max' => 'E-posta adresi en fazla 255 karakter olabilir.',
            'email.unique' => 'Bu e-posta adresi zaten kayıtlıdır.',

            'password.required' => 'Şifre alanı zorunludur.',
            'password.min' => 'Şifre en az 8 karakterden oluşmalıdır.',
            'password.confirmed' => 'Şifreler birbiriyle eşleşmiyor. Lütfen kontrol ediniz.',
        ];
    }
}
