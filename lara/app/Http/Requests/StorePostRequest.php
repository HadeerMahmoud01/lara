<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
           
                'name'=>'required',
                'email'=>'required',
                'password'=>'required'
           
    
        ];
    }
    public function message(){
        return[
            'name.required'=>'the name is required',
            'email.required'=>'the email is required',
            'password.required'=>'the password is required'

        ];
    }
}
