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
            'service_charge' => 'nullable',
            'price_currency' => 'required',
            'service_currency' => 'nullable',
            'listed' => 'required',
            'description' => 'required',
            'commercial' => 'string|nullable',
            'land' => 'string|nullable',
            'residential' => 'string|nullable',
            'reference_number' => 'string|unique',
<<<<<<< HEAD
            'bathroom' => 'integer|nullable',
            'bedroom' => 'integer|nullable',
            'sitting_room' => 'integer|nullable',
            'garage' => 'integer|nullable',
=======
>>>>>>> 5273d0759c41edc75fff2be7d4e1b2d0c1a50782
        ];
    }
}
