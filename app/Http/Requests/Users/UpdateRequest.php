<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest  extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->is_admin;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules( )
    {
        return [
            'name'=>['required','string','max:100'],
            'phone'=>['sometimes','nullable','max:10'],
            'birthdate'=>['required','date','before_or_equal:-18 years'],
            'city_id'=>['required','exists:cities,id']
        ];
    }
    
    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name'=>__('labels.name'),
            'phone'=>__('labels.phone'),
            'birthdate'=>__('labels.birthdate'),
            'city_id'=>__('labels.city_id')
        ];
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'phone.regex'=>__('labels.regex_phone'),
        ];
    }
}
