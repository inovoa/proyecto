<?php

namespace App\Http\Controllers;

use App\Citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['citas']=Citas::paginate(5);

        return view('citas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('citas.create');
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
        $campos=['Dia' => 'required|string|max:100',
                'Hora' => 'required|string|max:100',
                'MarcaModeloCoche' => 'required|string|max:100',
                'AñoCoche' => 'required|string|max:100',
                'Color' => 'required|string|max:100'
        ];
        $Mensaje=["required" => 'El :attribute es requerido.'];
        $this->validate($request,$campos,$Mensaje);

        
        $datosCita=request()->except('_token');

        Citas::insert($datosCita);

        
        return redirect('citas')->with('Mensaje','Cita agregada con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(Citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cita= Citas::findOrFail($id);
        return view('citas.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=['Dia' => 'required|string|max:100',
                'Hora' => 'required|string|max:100',
                'MarcaModeloCoche' => 'required|string|max:100',
                'AñoCoche' => 'required|string|max:100',
                'Color' => 'required|string|max:100'
        ];
        $Mensaje=["required" => 'El :attribute es requerido.'];
        $this->validate($request,$campos,$Mensaje);


        $datosCita=request()->except(['_token', '_method']);
        Citas::where('id', '=', $id)->update($datosCita);
        

        return redirect('citas')->with('Mensaje','Cita modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $cita= Citas::findOrFail($id);
        Citas::destroy($id);

        return redirect('citas')->with('Mensaje','Cita eliminada con éxito');
    }
}
