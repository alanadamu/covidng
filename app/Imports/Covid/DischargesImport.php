<?php

namespace App\Imports\Covid;

use App\Models\Covid\Discharge;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DischargesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Discharge([
            'date' => $date,
            'state_id' => $row['state'],
            'value' => $row['value'],
        ]);
    }
}
