<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRegisterRequest extends FormRequest
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
            'name'     => ['required', 'string', 'min:3', 'max:80'],
            'surname'  => ['nullable', 'string', 'max:80'],
            'email'    => ['required', 'unique:clients', 'string', 'email', 'max:255'],
            'phone'    => ['nullable', 'string', 'max:25'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'confirm'  => ['accepted'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'      => 'Поле (Имя) обязательно для заполнения',
            'name.min'           => 'Поле (Имя) должно содержать не менее :min символов.',
            'name.max'           => 'Поле (Имя) не должно превышать :max символов.',
            'surname.max'        => 'Поле (Фамилия) не должно превышать :max символов.',
            'email.required'     => 'Поле (Ваша почта) обязательно для заполнения.',
            'email.unique'       => 'Пользователь с такой почтой уже зарегестрирован',
            'email.email'        => 'Почта должна быть валидной.',
            'email.max'          => 'Поле (Ваша почта) не должно превышать :max символов.',
            'phone.max'          => 'Поле (Ваш номер телефона) не должно превышать :max символов.',
            'password.required'  => 'Поле (Пароль) обязательно для заполнения',
            'password.regex'     => 'Неверный формат пароля',
            'password.confirmed' => 'Подтвержденый пароль не совпадает',
            'accepted'           => 'Подтверждение должно быть принято.'
        ];
    }
}
