<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'email'=>['required','email','unique:users,email'],
            'password'=>['required','confirmed','min:8','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
            'name'=>['required','string','max:100'],
            'phone'=>['sometimes','nullable','max:10'],
            'nui'=>['required','string','min:11','max:11','regex:/[0-9]/'],
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
            'email'=>__('labels.email'),
            'password'=>__('labels.password'),
            'name'=>__('labels.name'),
            'phone'=>__('labels.phone'),
            'nui'=>__('labels.nui'),
            'birthdate'=>__('labels.birthdate'),
            'city_id'=>__('labels.city_id'),
            'country_id'=>__('labels.country_id'),
            'state_id'=>__('labels.state_id'),
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
            'password.regex'=>__('labels.regex_password'),
            'nui.regex'=>__('labels.regex_nui'),
            'phone.regex'=>__('labels.regex_phone'),
        ];
    }
}
