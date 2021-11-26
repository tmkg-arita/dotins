<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:3',
            'body' => 'required',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'タイトルは必須です！',
            'title.min' => 'タイトルは3文字以上で入力してください！',
            'body.required' => '本文は必須です！',
        ];
    }
}
