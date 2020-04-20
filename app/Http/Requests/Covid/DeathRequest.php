<?php

namespace App\Http\Requests\Covid;

use Illuminate\Foundation\Http\FormRequest;

class DeathRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date' => [
                'required'
            ],
            'value' => [
                'required'
            ],
            'state_id' => [
                'required'
            ]
        ];
    }
}
