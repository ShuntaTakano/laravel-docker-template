<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
    //　バリデーションルール
    public function rules()
    {
        return [
            //
            'content' => 'required|max:255',
        ];
    }

    // エラーメッセージ
    public function messages()
    {
        return [
            // content欄のrequiredエラー
            'content.required' => 'ToDoが入力されていません。',
            // content欄の文字数超過
            'content.max' => 'ToDoは255文字以内で入力してください。',
        ];
    }
}
