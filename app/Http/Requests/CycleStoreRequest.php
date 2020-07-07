<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CycleStoreRequest extends FormRequest
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
            'reg_number' => 'required|string',
            'brand' => 'required|string',
            'color' => 'required|string',
            'max_capacity' => 'required|numeric'
        ];
    }
}
