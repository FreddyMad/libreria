<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerViews extends Controller
{
    public function showMain(){
        return view('principal');
    }

    public function showForm(){
        return view('registro');
    }

    public function addBook(){
        return view('registro');
    }

}
