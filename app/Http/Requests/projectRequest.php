<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class projectRequest extends FormRequest
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
            'name' =>'required',
            'description' => 'nullable',
            'start_date' =>'required',
            'end_date' =>'required',
            'image' =>'required',
            'pdf'  =>'required',
            'project_type_id'=>'required'
        ];
    }
}
