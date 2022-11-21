<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Exports\AlumnosExport;
use App\Imports\AlumnosImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;
/**
 * Class AlumnoController
 * @package App\Http\Controllers
 */
class AlumnoController extends Controller
{
//esta sección contiene las funciones asociadas al Administrador
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::paginate();

        return view('alumno.index', compact('alumnos'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = new Alumno();
        return view('alumno.create', compact('alumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Alumno::$rules);

        $alumno = Alumno::create($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Datos ingresados con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);

        return view('alumno.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);

        return view('alumno.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        request()->validate(Alumno::$rules);

        $alumno->update($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Datos modificados con éxito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id)->delete();

        return redirect()->route('alumnos.index')
            ->with('success', 'Datos eliminados con éxito.');
    }
    
//esta sección contiene las funciones de importar y exportar
    public function export() 
    {
        return Excel::download(new AlumnosExport, 'alumnos.xlsx');
    }

    public function import(Request $lista)
    {
        $file = $lista ->file('lista-alumnos');
        Excel::import(new AlumnosImport, $file);
        
        return back() ->withStatus('Archivo subido con éxito');
    }

//esta sección contiene las funciones asociadas al Alumno
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function estudiante_index()
    {
        $alumnos = Alumno::paginate();

        return view('alumno.estudiante_index', compact('alumnos'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnos->perPage());
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function estudiante_create()
    {
        $alumno = new Alumno();
        return view('alumno.estudiante_create', compact('alumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function estudiante_store(Request $request)
    {
        request()->validate(Alumno::$rules);

        $alumno = Alumno::create($request->all());

        return redirect()->route('alumno.estudiante_index')
            ->with('success', 'Datos ingresados con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function estudiante_show($alumno)
    {
        try{        
            $alumno = Alumno::find($alumno);
            Log::debug($alumno);
            return view('alumno.estudiante_show', compact('alumno'));

        
        }catch(\exception $e){log::debug($e);}
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $Correo
     * @return \Illuminate\Http\Response
     */
    public function estudiante_edit($alumno)
    {
        $alumno = Alumno::find($alumno);

        return view('alumno.estudiante_edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function estudiante_update(Request $request, Alumno $alumno)
    {
        request()->validate(Alumno::$rules);

        $alumno->update($request->all());

        return redirect()->route('alumno.estudiante_index')
            ->with('success', 'Datos modificados con éxito.');
    }

}
