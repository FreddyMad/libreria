<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateAutor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class controladorAutores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulAut= DB::table('tb_autores')->get();

        return view('consultaAutor', compact('consulAut'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroAutor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validateAutor $request)
    {
        DB::table('tb_autores')->insert([
            "nombre"=>$request->input('txtAutor'),
            "fecha"=>$request->input('txtFecha'),
            "publi"=>$request->input('txtCant'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('autor/index')->with('confirm','Se guardo exitosamente')->with('autor', $request->txtAutor);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conAut = DB::table('tb_autores')->where('idAutor',$id)->first();

        return view('editarAutor', compact('conAut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validateAutor $request, $id)
    {
        DB::table('tb_autores')->where('idAutor',$id)->update([
            "nombre"=>$request->input('txtAutor'),
            "fecha"=>$request->input('txtFecha'),
            "publi"=>$request->input('txtCant'),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('autor/index')->with('edit','Se edito exitosamente')->with('autor', $request->txtAutor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_autores')->where('idAutor',$id)->delete();

        return redirect('autor/index')->with('delete','Se elimino correctamente');
    }
}
