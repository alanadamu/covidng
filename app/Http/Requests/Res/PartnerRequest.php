<?php

namespace App\Http\Requests\Res;

use App\Models\Res\Partner;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'journal_account_id' => [
                'required', Rule::unique((new Partner)->getTable())->ignore($this->route()->model->journal_account_id ?? null)
            ]
        ];
    }
}
