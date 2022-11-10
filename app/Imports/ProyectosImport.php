<?php

namespace App\Imports;

use App\Models\Proyecto;
use Maatwebsite\Excel\Concerns\ToModel;

class ProyectosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Proyecto([
            'Semestre'                  => $row[0],
            'RutProfesorGuia'           => $row[1],
            'NombresProfesorGuia'       => $row[2],
            'ApellidosProfesorGuia'     => $row[3],
            'RutProfesorCorref'         => $row[4],
            'NombresProfesorCorref'     => $row[5],
            'ApellidosProfesorCorref'   => $row[6],
            'NombreEmpresa'             => $row[7],
            'Tipo'                      => $row[8],
            'NuevoAntiguo'              => $row[9],
            'Asociacion'                => $row[10],
            'TituloTema'                => $row[11],
            'Area'                      => $row[12],
            'Resumen'                   => $row[13],
            'ObjetivoGeneral'           => $row[14],
            'ObjetivoEspecifico'        => $row[15],
            'Financiamiento'            => $row[16],
            'ImpactoSocial'             => $row[17],
            'LugarIS'                   => $row[18],
            'RazonIS'                   => $row[19],
            'VinculacionEmpresa'        => $row[20],
            'LugarVE'                   => $row[21],
            'RazonVE'                   => $row[22],
            'EstadoAutorizacion'        => $row[23],
            'EstadoReserva'             => $row[24],
            'RutAlumno1'                => $row[25],
            'NombreAlumno1'             => $row[26],
            'CarreraAlumno1'            => $row[27],
            'RutAlumno2'                => $row[28],
            'NombreAlumno2'             => $row[29],
            'CarreraAlumno2'            => $row[30],
            //
        ]);
    }
}
