<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->path() === 'hello';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|hello'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前必須',
            'mail.email' => 'メルアド形式でうて',
            'age.numeric' => '年齢は整数で',
            'age.hello' => '偶数だけってなんか他になかったんか、、'
        ];

    }
}
