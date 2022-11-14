<?php

namespace App\Exports;

use App\Models\Proyecto;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProyectosExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Proyecto::all();
    }
    public function headings(): array
    {
        return [
            '#',
            'Semestre',
            'RutProfesorGuia',
            'NombresProfesorGuia',
            'ApellidosProfesorGuia',
            'CorreoProfesorGuia',
            'RutProfesorCorref',
            'NombresProfesorCorref',
            'ApellidosProfesorCorref',
            'CorreoProfesorCorref',
            'NombreEmpresa',
            'Pago',
            'TituloTema',
            'Tipo',
            'Area1',
            'Area2',
            'Resumen',
            'ObjetivoGeneral',
            'ObjetivoEspecifico',
            'Financiamiento',
            'ImpactoSocial',
            'LugarIS',
            'RazonIS',
            'VinculacionEmpresa',
            'LugarVE',
            'RazonVE',
            'Apoyo',
            'EstadoAutorizacion',
            'EstadoReserva',
            'RutAlumno1',
            'NombreAlumno1',
            'CarreraAlumno1',
            'RutAlumno2',
            'NombreAlumno2',
            'CarreraAlumno2',
            'FechaCreacion',
            'FechaEdicion',
        ];
    }
}
