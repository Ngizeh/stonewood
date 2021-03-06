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
            'price' => 'nullable',
            'service_charge' => 'nullable',
            'price_currency' => 'nullable',
            'service_currency' => 'string|nullable',
            'listed' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'description' => 'required',
            'commercial' => 'string|nullable',
            'land' => 'string|nullable',
            'residential' => 'string|nullable',
            'reference_number' => 'string|unique',
            'bathroom' => 'integer|nullable',
            'bedroom' => 'integer|nullable',
            'sitting_room' => 'integer|nullable',
            'garage' => 'integer|nullable',
            'property_metrics' => 'string|nullable',
            'floor_size' => 'integer|nullable',
            'property_size' => 'integer|nullable'
        ];
    }
}
