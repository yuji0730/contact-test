<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => ['required'],
            'first_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'first_tel' => ['required', 'numeric', 'digits_between:1,5'],
            'middle_tel' => ['required', 'numeric', 'digits_between:1,5'],
            'last_tel' => ['required', 'numeric', 'digits_between:1,5'],
            'address' => ['required'],
            'contact-type' => ['required'],
            'detail' => ['required', 'max:120'],
        ];
    }

    public function messages()
     {
         return [
             'last_name.required' => '姓を入力してください',
             'first_name.required' => '名を入力してください',
             'gender.required' => '性別を選択してください',
             'email.required' => 'メールアドレスを入力してください',
             'email.email' => 'メールアドレスはメール形式で入力してください',
             'first_tel.required' => '電話番号を入力してください',
             'first_tel.numeric' => '電話番号は5桁までの数字で入力してください',
             'first_tel.digits_between' => '電話番号は5桁までの数字で入力してください',
             'middle_tel.required' => '電話番号を入力してください',
             'middle_tel.numeric' => '電話番号は5桁までの数字で入力してください',
             'middle_tel.digits_between' => '電話番号は5桁までの数字で入力してください',
             'last_tel.required' => '電話番号を入力してください',
             'last_tel.numeric' => '電話番号は5桁までの数字で入力してください',
             'last_tel.digits_between' => '電話番号は5桁までの数字で入力してください',
             'address.required' => '住所を入力してください',
             'contact-type.required' => 'お問い合わせの種類を選択してください',
             'detail.required' => 'お問い合わせの内容を入力してください',
             'detail.max' => 'お問合せ内容は120文字以内で入力してください',
         ];
     }
}
