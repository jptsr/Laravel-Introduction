<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRestaurantRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'zipCode' => 'required',
            'town' => 'required',
            'country' => 'required',
            'description' => 'required',
            'review'=>'required|min:0|max:5'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name is required',
            'address.required' => 'The address is required',
            'zipCode.required' => 'The zip code is required',
            'town.required' => 'The town is required',
            'country.required' => 'The country is required',
            'description.required' => 'The description is required',
            'review.required' => 'The review is required'
        ];
    }
}
