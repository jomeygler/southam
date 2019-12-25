<?php

namespace App\Imports;

use App\Tiempos;
use Maatwebsite\Excel\Concerns\ToModel;

class ImporTiempos implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tiempos([
          'articulo_id'     => $row[0],
           'comentario'    => $row[1],
           'inicio'    => $row[2],
           'fin'    => $row[3],
           'linea'    => $row[4],
           'tunel_id'    => $row[5],
           'cantidad'    => $row[6],
           'valor'    => $row[7],
           'dato1'    => $row[8],
           'dato1'    => $row[9],

            //
        ]);
    }
}
