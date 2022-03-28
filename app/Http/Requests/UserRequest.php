<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name' => "required",
            'last_name' => "required",
            'phone_number' => "nullable|min:10",
            'username' =>'nullable',
            'status'  =>'required|min:0|max:1',
            'gender'  =>'required|min:0|max:1',
            'position_id' =>'required',
            'bio' =>'required',
            'position_number' => 'required',
            'profile_photo_path' =>'nullable',
            'email' =>'required|email',
            'password' =>'nullable',
        ];
    }
}
