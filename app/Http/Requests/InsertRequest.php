<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class InsertRequest extends FormRequest
{
    
public function rules()
{
    return [
    'username'=>'required',
    'mail'=>'required|email',
    'age'=>'required|numeric',
    ];
}

public function messages() 
{
    return [
    'required'=>'必須項目です。',
    'email'=>'メールアドレスの形式で入力してください。',
    'numeric'=>'数値で入力してください。',
    ];
}

}
