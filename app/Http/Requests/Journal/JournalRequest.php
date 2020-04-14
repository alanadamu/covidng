<?php

namespace App\Http\Requests\Journal;

use Illuminate\Foundation\Http\FormRequest;

class JournalRequest extends FormRequest
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
            'account_id' => [
                'required'
            ],
            'transaction_type_id' => [
                'required'
            ],
            'date' => [
                'required'
            ],
            'reason' => [
                'required'
            ],
            'amount' => [
                'required'
            ],
        ];
    }
}
