<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'service_charge' => 'integer|nullable',
            'description' => 'required',
            'listed' => 'required',
            'commercial' => 'string|nullable',
            'land' => 'string|nullable',
            'residential' => 'string|nullable',
        ];
    }
}
