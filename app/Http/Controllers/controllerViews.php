<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateBook;
use App\Http\Requests\validateAutor;

class controllerViews extends Controller
{
    public function showMain(){
        return view('principal');
    }

    public function showForm(){
        return view('registro');
    }

    public function showFormAutor(){
        return view('registroAutor');
    }

    public function consultAutor(){
        return view('consultaAutor');
    }

    public function consultLibro(){
        return view('consultaLibro');
    }

    public function addBook(validateBook $req){
        return redirect('registro')
                ->with('confirm','Se guardo exitosamente')
                ->with('libro', $req->txtTitulo);
    }

    public function addAutor(validateAutor $req){
        return redirect('registroAutor')
                ->with('confirm','Se guardo exitosamente')
                ->with('autor', $req->txtAutor);
    }

}
