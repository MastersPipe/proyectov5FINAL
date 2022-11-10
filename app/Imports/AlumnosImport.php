<?php

namespace App\Imports;

use App\Models\Alumno;
use Maatwebsite\Excel\Concerns\ToModel;

class AlumnosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Alumno([
            'Semestre'              => $row[1],
            'ApellidoPaterno'       => $row[2],
            'ApellidoMaterno'       => $row[3],
            'Nombres'               => $row[4],
            'Rut'                   => $row[5],
            'Correo'                => $row[6],
            'Telefono'              => $row[7],
            'EstadoPractica'        => $row[8],
            'DuracionPractica'      => $row[9],
            'SinPractica'           => $row[10],
            'CargaAcademica'        => $row[11],
            'Carrera'               => $row[12],
            'AñoIngreso'            => $row[13],
            'Malla'                 => $row[14],
            'ClaveCurso'            => $row[15],
            'Paralelo'              => $row[16],
            'NombreCurso'           => $row[17],
            'TituloProyecto'        => $row[18],
            'ProfesorGuia'          => $row[19],
            'Correferente'          => $row[20],
            'Comentarios'           => $row[21],
            'EstadoAutorizacion'    => $row[22],
            'EstadoInscripcion'     => $row[23],
            //
        ]);
    }
}
