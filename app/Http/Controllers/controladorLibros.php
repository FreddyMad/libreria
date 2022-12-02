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

        foreach($consulLibro as $lib){
            $lib->nombreAutor = DB::table('tb_autores')->where('idAutor',$lib->autor_id)->first();
        }

        return view('consultaLibro', compact('consulLibro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cAutores= DB::table('tb_autores')->get();

        return view('registro', compact('cAutores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validateBook $request)
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
        $conLib = DB::table('tb_libros')->where('idLibro',$id)->first();

        $cAutores= DB::table('tb_autores')->get();

        

        return view('editarLibro', compact('conLib', 'cAutores'));
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
        DB::table('tb_libros')->where('idLibro',$id)->update([
            "titulo"=>$request->input('txtTitulo'),
            "isbn"=>$request->input('txtIsbn'),
            "autor_id"=>$request->input('txtAutor'),
            "paginas"=>$request->input('txtPaginas'),
            "editorial"=>$request->input('txtEditorial'),
            "email"=>$request->input('txtEmail'),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('libro/index')->with('edit','Se guardo exitosamente')->with('titulo', $request->txtTitulo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_libros')->where('idLibro',$id)->delete();

        return redirect('libro/index')->with('delete','Se elimino correctamente');
    }
}
