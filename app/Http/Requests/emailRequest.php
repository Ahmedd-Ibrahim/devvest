<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class emailRequest extends FormRequest
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
            'name'     =>  'required|max:100',
            'email'  =>  'required|email|max:100',
            'subject'  =>  'required|max:255',
            'phone'  =>  'required|max:100|min:6',
            'messages' =>  'required|max:500'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     =>  'الاسم مطلوب ',
            'email.required'  =>  'الاميل الالكتروني مطلوب',
            'email.email'  =>  'ادخل الاميل الالكتروني بشكل صحيح',
            'subject.required'  =>  'عنوان الموضوع مطلوب',
            'messages.required' =>  'الرسالة مطلوبة'
        ];
    }
}
