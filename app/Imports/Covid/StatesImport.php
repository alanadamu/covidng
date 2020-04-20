<?php

namespace App\Imports\Covid;

use App\Models\Covid\State;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StatesImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new State([
            'name' => $row['name'],
        ]);
    }

    public function rules(): array
    {
        return [
            'name' => 'unique:states,name',

             // Above is alias for as it always validates in batches
             '*.name' => 'unique:states,name',
        ];
    }
}
