<?php

namespace App\Http\Requests\CRUD\School;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'street' => [
                'required',
                'string',
                'max:255'
            ],
            'zip' => [
                'required',
                'string',
                'max:5'
            ],
            'city' => [
                'required',
                'string',
                'max:255'
            ],
            'country' => [
                'required',
                'string',
                'max:255'
            ],
            'contact_name' => [
                'required',
                'string',
                'max:255'
            ],
            'contact_phone' => [
                'required',
                'string',
                'max:255'
            ],
            'contact_email' => [
                'required',
                'email',
                'max:255'
            ],
            'password' => [
                'required',
                'string',
                'confirmed'
            ]
        ];
    }
}
