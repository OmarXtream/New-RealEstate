<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PRequest extends FormRequest
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
            'name' => ['bail','required', 'string', 'max:255'],
            'phone' => ['bail', 'required'],

            // 'type' => ['bail', 'string', 'max:255'],
            // 'city' => ['bail', 'string', 'max:255'],

            // 'rooms' => ['bail', 'integer'],
            // 'baths' => ['bail', 'integer'],

            // 'first_district' => ['bail', 'string', 'max:255'],
            // 'Second_district' => ['bail', 'string', 'max:255'],
            // 'Third_district' => ['bail', 'string', 'max:255'],
            // 'Fourth_district' => ['bail', 'string', 'max:255'],

            // 'details' => ['bail', 'string'],

        ];
    }
}
