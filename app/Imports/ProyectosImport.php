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
    //esta función detecta las columnas del archivo subido y las asocia a una variable en particular
    //por eso debe seguirse un orden en el archivo a subir
    public function model(array $row)
    {
        return new Proyecto([
            'Semestre'                  => $row[0],
            'RutProfesorGuia'           => $row[1],
            'NombresProfesorGuia'       => $row[2],
            'ApellidosProfesorGuia'     => $row[3],
            'CorreoProfesorGuia'        => $row[4],
            'RutProfesorCorref'         => $row[5],
            'NombresProfesorCorref'     => $row[6],
            'ApellidosProfesorCorref'   => $row[7],
            'CorreoProfesorCorref'      => $row[8],
            'NombreEmpresa'             => $row[9],
            'Pago'                      => $row[10],
            'TituloTema'                => $row[11],
            'Tipo'                      => $row[12],
            'Area1'                     => $row[13],
            'Area2'                     => $row[14],
            'Resumen'                   => $row[15],
            'ObjetivoGeneral'           => $row[16],
            'ObjetivoEspecifico'        => $row[17],
            'Financiamiento'            => $row[18],
            'ImpactoSocial'             => $row[19],
            'LugarIS'                   => $row[20],
            'RazonIS'                   => $row[21],
            'VinculacionEmpresa'        => $row[22],
            'LugarVE'                   => $row[23],
            'RazonVE'                   => $row[24],
            'Apoyo'                     => $row[25],
            'EstadoAutorizacion'        => $row[26],
            'EstadoReserva'             => $row[27],
            'RutAlumno1'                => $row[28],
            'NombreAlumno1'             => $row[29],
            'CarreraAlumno1'            => $row[30],
            'RutAlumno2'                => $row[31],
            'NombreAlumno2'             => $row[32],
            'CarreraAlumno2'            => $row[33],
            //
        ]);
    }
}
