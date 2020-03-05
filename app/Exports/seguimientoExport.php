<?php

namespace App\Exports;

use App\rseguimiento;
use App\seguimiento;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Http\Controllers\ReporteCotroller;
use Illuminate\Database\Eloquent\Model;

class seguimientoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
//return view('reportes.rtiemposc');
        return seguimiento::orderBy('fecha_ela', 'DESC')->paginate(10);
    }


    //
}
