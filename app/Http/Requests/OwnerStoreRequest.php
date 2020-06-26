<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerStoreRequest extends FormRequest
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
            'title' => 'required|string',
            'fname' => 'required|string',
            'lname' => 'required|string',
            'other_name' => 'string',
            'telephone' => 'numeric',
            'address' =>'string',
            'email' => 'bail|required|email|unique:owners',
            'password' => 'required|confirmed|min:8'

        ];
    }

    /**
     * custom messages for the validation of the Owner's Details.
     *
     * @return array
     */

    public function messages()
    {
        return array([
            'title.required' => 'The title is required',
            'fname.required' => 'The first name is required',
            'fname.string' => 'The first name must be a combination of strings',
            'lname.required' => 'The Last name is required',
            'lname.string' => 'The last name must be a combination of strings',
            'other_name.string' => 'The last name must be a combination of strings',
            'telephone.numeric' => 'The telephone number must be a combination of numbers',
            'address.string' => 'The Address must be a combination of string literals',
            'email.string' => 'The email must be a combination of string literals',
            'email.unique' => 'An owner with similar email already exists',
            'password.confirmed' => 'Passwords do not match',
            'password.min' => 'Passwords should have a minimum of 8 characters'
        ]);
    }
}
