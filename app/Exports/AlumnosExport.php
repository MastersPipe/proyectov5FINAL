<?php

namespace App\Exports;

use App\Models\Alumno;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AlumnosExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    //esta función recopila toda la tabla de la base de datos
    public function collection()
    {
        return Alumno::all();
    }
    //esta función genera una fila de encabezado en el archivo a exportar
    public function headings(): array
    {
        return [
            '#',
            'Semestre',
            'ApellidoPaterno',
            'ApellidoMaterno',
            'Nombres',
            'Rut',
            'Correo',
            'Telefono',
            'EstadoPractica',
            'DuracionPractica',
            'SinPractica',
            'CargaAcademica',
            'Carrera',
            'AñoIngreso',
            'Malla',
            'ClaveCurso',
            'Paralelo',
            'NombreCurso',
            'TituloProyecto',
            'ProfesorGuia',
            'Correferente',
            'Comentarios',
            'EstadoAutorizacion',
            'EstadoInscripcion',
            'FechaCreacion',
            'FechaEdicion',
        ];
    }
}
