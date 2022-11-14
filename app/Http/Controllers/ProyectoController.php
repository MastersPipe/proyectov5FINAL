<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Exports\ProyectosExport;
use App\Imports\ProyectosImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


/**
 * Class ProyectoController
 * @package App\Http\Controllers
 */
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::paginate();

        return view('proyecto.index', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyecto = new Proyecto();
        return view('proyecto.create', compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Proyecto::$rules);

        $proyecto = Proyecto::create($request->all());

        return redirect()->route('proyectos.index')
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
        $proyecto = Proyecto::find($id);

        return view('proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proyecto $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        request()->validate(Proyecto::$rules);

        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')
            ->with('success', 'Datos modificados con éxito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id)->delete();

        return redirect()->route('proyectos.index')
            ->with('success', 'Datos eliminados con éxito.');
    }

    public function export() 
    {
        return Excel::download(new ProyectosExport, 'proyectos.xlsx');
    }

    public function import(Request $lista)
    {
        $file = $lista ->file('lista-proyectos');
        Excel::import(new ProyectosImport, $file);
        
        return back() ->withStatus('Archivo subido con éxito');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function docente_index()
    {
        $proyectos = Proyecto::paginate();

        return view('proyecto.docente_index', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function docente_create()
    {
        $proyecto = new Proyecto();
        return view('proyecto.docente_create', compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function docente_store(Request $request)
    {
        request()->validate(Proyecto::$rules);

        $proyecto = Proyecto::create($request->all());

        return redirect()->route('proyecto.docente_index')
            ->with('success', 'Datos ingresados con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function docente_show($proyecto)
    {
        $proyecto = Proyecto::find($proyecto);

        return view('proyecto.docente_show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function docente_edit($proyecto)
    {
        $proyecto = Proyecto::find($proyecto);

        return view('proyecto.docente_edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proyecto $proyecto
     * @return \Illuminate\Http\Response
     */
    public function docente_update(Request $request, Proyecto $proyecto)
    {
        request()->validate(Proyecto::$rules);

        $proyecto->update($request->all());

        return redirect()->route('proyecto.docente_index')
            ->with('success', 'Datos modificados con éxito.');
    }
}
