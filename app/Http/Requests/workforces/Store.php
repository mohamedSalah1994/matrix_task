<?php

namespace App\Http\Requests\workforces;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'name' => 'required|max:225',
            'work_id'  => 'required|unique:work_forces',
            'email' => 'required|unique:work_forces|max:225',
            'password' => 'required',
            'department'=>'required',
            'position'=>'required',
            'project'=>'required',

        ];
    }
}
