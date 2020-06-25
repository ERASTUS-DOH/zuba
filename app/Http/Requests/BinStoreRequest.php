<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BinStoreRequest extends FormRequest
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
            'nickName' => 'required|string',
            'serialNumber' => 'required|string',
            'maxLevel' => 'required|numeric',
            'maxWeight' => 'required|numeric'
        ];
    }

    /**
     * custom messages for validation of the Bin's details
     *
     * @return array
     */
    public function messages()
    {
        return [
          'nickName.required' => 'nickName is required.',
          'nickName.string' => 'nickName must be a string.',
          'serialNumber.required' => 'Serial Number is required.',
          'serialNumber.string' => 'Serial Number must be a variable character.',
          'maxWeight.required' => 'Maximum Weight is required.',
          'maxWeight.numeric' => 'Maximum Weight must be a number',
          'maxLevel.required' => 'Maximum Level is required',
          'maxLevel.numeric' => 'Maximum Level must be a number'
        ];
    }
}
