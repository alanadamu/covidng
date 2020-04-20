<?php

namespace App\Imports\Covid;

use Carbon\Carbon;
use App\Models\Covid\Test;
use App\Models\Covid\State;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TestsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {      
        return new Test([
            'date' => $date,
            'state_id' => $row['state'],
            'value' => $row['value'],
            
        ]);
    }
}
