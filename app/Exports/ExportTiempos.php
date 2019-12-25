<?php

namespace App\Exports;

use App\Tiempos;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
use App\Http\Controllers\TunelController;

class ExportTiempos implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    //  $from = $request('desde');
//$to = $request('hasta');

//Tiempos::whereBetween('tiempos', [$from, $to])->get();
        return Tiempos::orderBy('fin', 'DESC')->get();

    //return Tiempos::whereMonth('fin', 'DESC')->get();


    }
}
