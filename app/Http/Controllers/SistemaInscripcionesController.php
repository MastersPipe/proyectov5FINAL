<?php

namespace App\Http\Controllers;

use App\Models\SistemaInscripciones;
use Illuminate\Http\Request;

class SistemaInscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['sistema_inscripciones'] = SistemaInscripciones::paginate(10);
        return view('test.index', $datos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'Correo'=>'required|email',
            'AñoDeIngreso'=>'required|string|max:100',

        ];
        $mensaje=[
            'required'=>'El :attribute es obligatorio'

        ];
        $this->validate($request, $campos, $mensaje);


        //$datosFormulario = request()->all();
        $datosFormulario = request()->except('_token');
        SistemaInscripciones::insert($datosFormulario);

        //return response()->json($datosFormulario);
        return redirect('test')->with('mensaje','Entrada nueva ingresada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SistemaInscripciones  $sistemaInscripciones
     * @return \Illuminate\Http\Response
     */
    public function show(SistemaInscripciones $sistemaInscripciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SistemaInscripciones  $sistemaInscripciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $consulta=SistemaInscripciones::findorfail($id);
        return view('test.edit', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SistemaInscripciones  $sistemaInscripciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Nombre'=>'required|string|max:100',
            'ApellidoPaterno'=>'required|string|max:100',
            'ApellidoMaterno'=>'required|string|max:100',
            'Correo'=>'required|email',
            'AñoDeIngreso'=>'required|string|max:100',

        ];
        $mensaje=[
            'required'=>'El :attribute es obligatorio'

        ];
        $this->validate($request, $campos, $mensaje);

        $datosFormulario = request()->except(['_token', '_method']);
        SistemaInscripciones::where('id', '=', $id)->update($datosFormulario);

        $consulta=SistemaInscripciones::findorfail($id);
       // return view('test.edit', compact('consulta'));
       return redirect('test')->with('mensaje','Datos actualizados con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SistemaInscripciones  $sistemaInscripciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        SistemaInscripciones::destroy($id);

        return redirect('test')->with('mensaje','Entrada eliminada con éxito');

    }
}
?>