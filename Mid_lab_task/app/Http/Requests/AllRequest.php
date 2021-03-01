<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AllRequest extends FormRequest
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
            'email' => 'required|email:rfc|max:50|bail',
            'password' =>'required|max:20|min:8|regex:/[a-zA-Z0-9]/i|bail'
        ];
    }
}
