<?php

namespace App\Imports;

use App\seguimiento;
use Maatwebsite\Excel\Concerns\ToModel;

class SeguimientoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new seguimiento([
            //
        ]);
    }
}
