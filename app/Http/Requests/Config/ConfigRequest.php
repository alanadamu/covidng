<?php

namespace App\Http\Requests\Config;

use App\Models\Config\Config;
use Illuminate\Validation\Rule;
use App\Models\Config\OdooModel;
use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
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
            'config_name' => [
                'required', Rule::unique((new Config)->getTable())->ignore($this->route()->model->config_name ?? null)
            ],
            'table_name' => [
                'required',
            ],
            'config_odoo_model_id' => [
                'required', 
            ],
        ];
    }
}
