<?php

namespace App\Exports;

use App\rtiemposc;
use App\Tiempos;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Http\Controllers\ReporteCotroller;
use Illuminate\Database\Eloquent\Model;

class ReportesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
//return view('reportes.rtiemposc');
        return Tiempos::orderBy('fin', 'DESC')->paginate(10);
    }


    //
}
