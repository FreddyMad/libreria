<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateBook;

class controllerViews extends Controller
{
    public function showMain(){
        return view('principal');
    }

    public function showForm(){
        return view('registro');
    }

    public function addBook(validateBook $req){
        return redirect('registro')
                ->with('confirm','Se guardo exitosamente')
                ->with('libro', $req->txtTitulo);
    }

}
