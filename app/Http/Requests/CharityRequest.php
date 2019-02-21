<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'purpose'                   => ['required', 'string', 'min:80', 'max:130'],
            'sum'                       => ['required', 'numeric'],
            'account_number'            => ['required', 'numeric', 'digits_between:5,50'],
            'bank_title'                => ['required', 'string', 'min:10', 'max:50'],
            'mfo'                       => ['required', 'numeric', 'digits_between:5,30'],
            'phone'                     => ['required', 'string', 'max:25'],
            'inn'                       => ['required', 'string', 'max:15'],
            'full_name'                 => ['nullable', 'string', 'min:2', 'max:255'],
            'locality'                  => ['required', 'string', 'min:1', 'max:255'],
            'address'                   => ['required', 'string', 'min:8', 'max:255'],
            'birth_date'                => ['required'],
            'category_id'               => ['required'],
            'about'                     => ['required', 'min:20'],
            'img'                       => ['required', 'image'],
            'document.client_passport' => ['required'],
            'document[passport]'        => ['image'],
            'document.*'                => ['image'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     * @return array
     */
    public function messages()
    {
        return [
            'purpose.required'                   => 'Поле (Цель сбора) обязательно для заполнения',
            'purpose.min'                        => 'Поле (Цель сбора) должно содержать не менее :min символов.',
            'purpose.max'                        => 'Поле (Цель сбора) не должно превышать :max символов.',
            'sum.required'                       => 'Поле (Сумма сбора) обязательно для заполнения',
            'sum.numeric'                        => 'Сумма сбора должен быть числом.',
            'account_number.required'            => 'Поле (Цель сбора) обязательно для заполнения',
            'account_number.numeric'             => 'Номер счета должен быть числом.',
            'account_number.digits_between'      => 'Номер счета должен быть от 5 до 50 цифр.',
            'bank_title.required'                => 'Поле (Полное название банка) обязательно для заполнения',
            'bank_title.min'                     => 'Поле (Полное название банка) должно содержать не менее :min символов.',
            'bank_title.max'                     => 'Поле (Полное название банка) должно содержать не менее :max символов.',
            'mfo.required'                       => 'Поле (МФО Банка) обязательно для заполнения',
            'mfo.numeric'                        => 'МФО Банка должен быть числом.',
            'mfo.digits_between'                 => 'МФО Банка должен быть от 5 до 30 цифр.',
            'phone.required'                     => 'Поле (Ваш номер телефона) обязательно для заполнения',
            'phone.max'                          => 'Поле (Ваш номер телефона) не должно превышать :max символов.',
            'inn.required'                       => 'Поле (Индентификационный код) обязательно для заполнения',
            'inn.max'                            => 'Поле (Индентификационный код) не должно превышать :max символов.',
            'full_name.required'                 => 'Поле (Для кого собираются средства) обязательно для заполнения',
            'full_name.min'                      => 'Поле (Для кого собираются средства) должно содержать не менее :min символов.',
            'full_name.max'                      => 'Поле (Для кого собираются средства) не должно превышать :max символов.',
            'locality.required'                  => 'Поле (Населенный пункт) обязательно для заполнения',
            'locality.min'                       => 'Поле (Населенный пункт) должно содержать не менее :min символов.',
            'locality.max'                       => 'Поле (Населенный пункт) не должно превышать :max символов.',
            'address.required'                   => 'Поле (Адрес) обязательно для заполнения',
            'address.min'                        => 'Поле (Адрес) должно содержать не менее :min символов.',
            'address.max'                        => 'Поле (Адрес) не должно превышать :max символов.',
            'birth_date.required'                => 'Поле (Дата рождения) обязательно для заполнения',
            'birth_date.date_format'             => 'Поле (Дата рождения) обязательно для заполнения',
            'category_id.required'               => 'Поле (Категория заболевания) обязательно для заполнения',
            'about.required'                     => 'Поле (Опишите свою ситуацию) обязательно для заполнения',
            'about.min'                          => 'Поле (Опишите свою ситуацию) должно содержать не менее :min символов.',
            'img.required'                       => 'Поле (Фотография вашего сбора) быть изображением.',
            'img.image'                          => 'Поле (Фотография вашего сбора) должно быть картинкой',
            'document.client_passport.required' => 'Поле (Фотография вашего паспорта) быть изображением.',
            'document.client_passport.image'    => 'Поле (Фотография вашего паспорта) должно быть картинкой',
            'document[passport].image'           => 'Поле (Фото паспорта реципиента) должно быть картинкой',
            'document.*.image'                   => 'Поле (Фото больничных документов) должно быть картинкой',


        ];
    }
}
