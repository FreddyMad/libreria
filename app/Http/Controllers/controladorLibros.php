<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateBook;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class controladorLibros extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulLibro= DB::table('tb_libros')->get();

        return view('consultaLibro', compact('consulLibro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tb_libros')->insert([
            "titulo"=>$request->input('txtTitulo'),
            "isbn"=>$request->input('txtIsbn'),
            "autor_id"=>$request->input('txtAutor'),
            "paginas"=>$request->input('txtPaginas'),
            "editorial"=>$request->input('txtEditorial'),
            "email"=>$request->input('txtEmail'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('libro/index')->with('confirm','Se guardo exitosamente')->with('titulo', $request->txtTitulo);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
