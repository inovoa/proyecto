<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios']=Usuarios::paginate(5);

        return view('usuarios.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
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

        $campos=['Nombre' => 'required|string|max:100',
                'Apellidos' => 'required|string|max:100',
                'Correo' => 'required|email',
                'Telefono' => 'required|string|max:10'
        ];
        $Mensaje=["required" => 'El :attribute es requerido.'];
        $this->validate($request,$campos,$Mensaje);


        //datosUsuario=request()->all();
        $datosUsuario=request()->except('_token');

        Usuarios::insert($datosUsuario);

        //return response()->json($datosUsuario);
        return redirect('usuarios')->with('Mensaje','Usuario agregado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario= Usuarios::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=['Nombre' => 'required|string|max:100',
                'Apellidos' => 'required|string|max:100',
                'Correo' => 'required|email',
                'Telefono' => 'required|string|max:10'
        ];
        $Mensaje=["required" => 'El :attribute es requerido.'];
        $this->validate($request,$campos,$Mensaje);


        $datosUsuario=request()->except(['_token', '_method']);
        Usuarios::where('id', '=', $id)->update($datosUsuario);
        
        //$usuario= Usuarios::findOrFail($id);
        //return view('usuarios.edit', compact('usuario'));

        return redirect('usuarios')->with('Mensaje','Usuario modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $usuario= Usuarios::findOrFail($id);
        Usuarios::destroy($id);

        return redirect('usuarios')->with('Mensaje','Usuario eliminado con éxito');

    }
}
