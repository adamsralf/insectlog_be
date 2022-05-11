<?php

namespace App\Http\Requests\CRUD\Log;

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
     * @return array
     */
    public function rules()
    {
        return [
            'insect_id' => [
                'required',
                'integer',
                'exists:insects,id'
            ],
            'user_id' => [
                'required',
                'integer',
                'exists:users,id'
            ],
            'device_id' => [
                'required',
                'integer',
            ],
            'latitude' => [
                'required',
                'numeric',
                'between:-90,90'
            ],
            'longitude' => [
                'required',
                'numeric',
                'between:-90,90'
            ],
            'altitude' => [
                'required',
                'numeric',
                'between:-90,90'
            ]
        ];
    }
}
