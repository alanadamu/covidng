<?php

namespace App\Http\Requests\Covid;

use App\Models\Covid\Test;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
        $params = $this->request->all();
        $date = $params['date'] ? Carbon::parse($params['date'])->format('Y-m-d') : null;
        // dd(Rule::unique((new Test)->getTable())->where('state_id', $params['state_id']));
        return [
            'date' => [
                'required', Rule::unique((new Test)->getTable())->where(function ($query) use ($params) {
                    return $query->where('state_id', $params['state_id']);
                }),
            ],
            'state_id' => [
                'required',Rule::unique((new Test)->getTable())->where(function ($query) use ($params) {
                    return $query->where('date', $params['date']);
                }),
            ],
            'value' => [
                'required'
            ],
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
            'date.unique' => 'This state and date Combination already exists',
            'state_id.unique' => 'This state and date Combination already exists',
        ];
    }
}
