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
            'name'     =>  'required',
            'email'  =>  'required|email',
            'subject'  =>  'required',
            'message' =>  'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'     =>  'الاسم مطلوب ',
            'email.required'  =>  'الاميل الالكتروني مطلوب',
            'email.email'  =>  'ادخل الاميل الاليكتروني بشكل صحيح',
            'subject.required'  =>  'عنوان الموضوع مطلوب',
            'message.required' =>  'الرسالى مطلوبة'
        ];
    }
}
